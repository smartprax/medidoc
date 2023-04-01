<?php

namespace Smartprax\Medidoc\Methods;

use Carbon\CarbonImmutable;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Support\Stringable;
use Lorisleiva\Actions\Concerns\AsAction;
use Lorisleiva\Actions\Concerns\AsCommand;
use Ramsey\Uuid\Uuid;
use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;
use Smartprax\Medidoc\XML\MedidocXML;
use Smartprax\Medidoc\XML\Nodes\Body;
use Smartprax\Medidoc\XML\Nodes\Envelope\Action;
use Smartprax\Medidoc\XML\Nodes\Envelope\LoginAction;
use Smartprax\Medidoc\XML\Nodes\Envelope\LoginSecurity;
use Smartprax\Medidoc\XML\Nodes\Envelope\MessageID;
use Smartprax\Medidoc\XML\Nodes\Envelope\ReplyTo;
use Smartprax\Medidoc\XML\Nodes\Envelope\Security;
use Smartprax\Medidoc\XML\Nodes\Envelope\To;
use Smartprax\Medidoc\XML\Nodes\Header;

abstract class Method implements XmlSerializable
{
    use AsAction,
        AsCommand;

    private string $message_id;
    private CarbonImmutable $timestamp;
    private string $uuid;

    abstract public function process(\SimpleXMLElement $body) : void;

    public function name() : Stringable
    {
        return Str::of(get_class($this))
            ->replace('\\', '/')
            ->basename();
    }

    public function uuid() : string
    {
        return $this->uuid ??= Uuid::uuid4();
    }

    public function timestamp() : CarbonImmutable
    {
        return $this->timestamp ??= CarbonImmutable::now('GMT');
    }

    public function messageId() : string
    {
        return $this->message_id ??= 'urn:uuid:' . Uuid::uuid4();
    }

    /**
     * @throws \Exception
     */
    public function handle() : void
    {
        ray('timestamp: ' . $this->timestamp()->unix());
        //ray('uuid: ' . $this->uuid());

        $login = $this->login();

        $this->call(
            $login
        );
    }

    /**
     * @throws \Exception
     */
    public function login() : Login
    {
        $loginMethod = new Login();

        $writer = MedidocXML::write(
            Header::create()
                ->addChild(new LoginAction())
                ->addChild(new MessageID($this))
                ->addChild(new ReplyTo())
                ->addChild(new To())
                ->addChild(new LoginSecurity($this)),
            new Body($loginMethod));

        $body = MedidocXML::read($this->request($writer));

        $loginMethod->process($body);

        return $loginMethod;
    }

    /**
     * @throws \Exception
     */
    public function call(Login $login) : void
    {
        $writer = MedidocXML::write(
            Header::create()
                ->addChild(new Action($this))
                ->addChild(new MessageID($this))
                ->addChild(new ReplyTo())
                ->addChild(new To())
                ->addChild(new Security($this, $login)),
            new Body($this));

        //\ray()->xml($writer->outputMemory(false));

        $body = MedidocXML::read($this->request($writer));
        //$this->process($body);
    }

    public function getCommandSignature() :string
    {
        return $this->name()
            ->snake('-')
            ->prepend('medidoc:');
    }

    /**
     * @throws \Exception
     */
    public function asCommand(Command $command): void
    {
        $this->handle();
    }

    /**
     * @throws \Exception
     */
    //private function request(Writer $writer): \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response
    private function request(Writer $writer): \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response
    {
        $xml = $writer->outputMemory();

        ray()->xml($xml);

        $response = Http::withHeaders([
            'Content-Type'=>'application/soap+xml',
        ])
            ->withBody($xml, "application/soap+xml")
            ->post(\config('medidoc.endpoint'));

        return $response;
    }
}
