<?php

namespace Smartprax\Medidoc\Requests;

use Illuminate\Support\Str;
use Illuminate\Support\Stringable;
use Lorisleiva\Actions\Concerns\AsAction;
use Phpro\SoapClient\Type\MixedResult;
use Phpro\SoapClient\Type\RequestInterface;
use Smartprax\Medidoc\Facades\Medidoc;

abstract class MedidocRequest implements RequestInterface
{
    use AsAction;

    public string $gln;
    public string $password;

    public function method(): Stringable
    {
        return Str::of(get_class($this))
            ->replace('\\', '/')
            ->basename();
    }

    public function responseClass(): string
    {
        return 'Smartprax\Medidoc\Responses\\' . $this->method()->append('Response');
    }

    /**
     * @throws Exception
     */
    protected function call()
    {
        /** @var MixedResult $response */
        $response = Medidoc::call($this);

        $type = $response->getResult();
        $vars = get_object_vars($type);
        $responseType = \reset($vars);

        if ($responseType->ReturnStatus !== 1) {
            throw new \Exception($responseType->ReturnMessage);
        }

        return $responseType;
    }

    public function getCommandSignature(): string
    {
        return $this
            ->method()
            ->snake('-')
            ->prepend('medidoc:');
    }

}
