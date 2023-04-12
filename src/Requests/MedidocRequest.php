<?php

namespace Smartprax\Medidoc\Requests;

use Illuminate\Support\Str;
use Illuminate\Support\Stringable;
use Lorisleiva\Actions\Concerns\AsAction;
use Lorisleiva\Actions\Concerns\AsCommand;
use Phpro\SoapClient\Type\RequestInterface;
use Smartprax\Medidoc\Facades\Medidoc;

abstract class MedidocRequest implements RequestInterface
{
    use AsAction,
        AsCommand;

    public function method(): string
    {
        return $this
            ->className()
            ->toString();
    }

    public function responseProp(): string
    {
        return $this
            ->className()
            ->append('Result')
            ->toString();
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
