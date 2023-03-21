<?php

namespace Smartprax\Medidoc\Methods;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Illuminate\Support\Stringable;
use Lorisleiva\Actions\Concerns\AsAction;
use Lorisleiva\Actions\Concerns\AsCommand;
use Sabre\Xml\XmlSerializable;
use Smartprax\Medidoc\XML\Nodes\Body;
use Smartprax\Medidoc\XML\Nodes\Envelope;
use Smartprax\Medidoc\XML\XML_NS;
use Smartprax\Medidoc\XML\MedidocXMLService;

abstract class AbstractMethod implements XmlSerializable
{
    use AsAction,
        AsCommand;

    //protected function includes() : Inclusion
    //{
    //
    //    $timestamp = \now('GMT');
    //    $client_secret = base64_encode(
    //        pack('H*', sha1(pack('H*', \mt_rand()) .
    //                pack('a*', $timestamp->clone()->unix()) .
    //                pack('a*', \config('medidoc.encryption_key'))
    //            )
    //        )
    //    );
    //
    //    $ns_trust = 'http://schemas.xmlsoap.org/ws/2005/02/trust';
    //
    //    return Soap::include([
    //        new \SoapVar(data: [
    //            new \SoapVar(data: 'tp://schemas.xmlsoap.org/ws/ht2005/02/sc/sct', encoding: \XSD_STRING, nodeName: 'TokenType', nodeNamespace: $ns_trust),
    //            new \SoapVar(data: 'http://schemas.xmlsoap.org/ws/2005/02/trust/Issue', encoding: \XSD_STRING, nodeName: 'RequestType', nodeNamespace: $ns_trust),
    //            new \SoapVar(data: [
    //                new \SoapVar(data: [
    //                    '{' . static::NAMESPACES_WSS_SECURITY_UTILITY. '}:Id' => Uuid::uuid4(),
    //                    'Type' => "http://schemas.xmlsoap.org/ws/2005/02/trust/Nonce",
    //                    '_' => $client_secret
    //                ], encoding: \XSD_STRING, nodeName: 'BinarySecret', nodeNamespace: $ns_trust),
    //            ], encoding: \SOAP_ENC_OBJECT, nodeName: 'Entropy', nodeNamespace: $ns_trust),
    //        ], encoding: \SOAP_ENC_OBJECT, nodeName: 'RequestSecurityToken', nodeNamespace: $ns_trust),
    //    ]);
    //}

    public function name() : Stringable
    {
        return Str::of(get_class($this))
            ->replace('\\', '/')
            ->basename();
    }

    public function call()
    {
        $this->handle();
    }

    public function handle() : string
    {
        return MedidocXMLService::forMethod($this)->prettyPrint();
    }

    public function getCommandSignature() :string
    {
        return $this->name()
            ->snake('-')
            ->prepend('medidoc:');
    }

    public function asCommand(Command $command): void
    {
        $xml = $this->handle();

        $command->info($xml);

        ray()->text($xml);
    }
}
