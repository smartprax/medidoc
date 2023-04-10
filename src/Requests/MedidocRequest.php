<?php

namespace Smartprax\Medidoc\Requests;

use Illuminate\Support\Str;
use Illuminate\Support\Stringable;
use Lorisleiva\Actions\Concerns\AsAction;
use Phpro\SoapClient\Type\RequestInterface;
use Smartprax\Medidoc\Facades\Medidoc;

abstract class MedidocRequest implements RequestInterface
{
    use AsAction;

    public function method(): string
    {
        return $this
            ->className()
            ->toString();
    }

    private function responseProp(): string
    {
        return $this
            ->className()
            ->append('Result')
            ->toString();
    }

    protected function call(array $properties)
    {
        $response = Medidoc::call($this, $properties)->{$this->responseProp()};

        if ($response->ReturnStatus !== 1) {
            throw new \Exception($response->ReturnMessage);
        }

        return $response;
    }

    public function getCommandSignature(): string
    {
        return $this
            ->className()
            ->snake('-')
            ->prepend('medidoc:')
            ->toString();
    }

    private function className() : Stringable
    {
        return Str::of(get_class($this))
            ->replace('\\', '/')
            ->basename();
    }

}
