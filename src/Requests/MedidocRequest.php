<?php

namespace Smartprax\Medidoc\Requests;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Illuminate\Support\Stringable;
use Lorisleiva\Actions\Concerns\AsAction;
use Lorisleiva\Actions\Concerns\AsCommand;
use Phpro\SoapClient\Type\RequestInterface;

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

    protected function responseProp(): string
    {
        return $this
            ->className()
            ->append('Result')
            ->toString();
    }

    public function processResponse($response)
    {

        //ray($response);
        //ray(\get_class($response));

        $result = $response->{$this->responseProp()};

        ray(\get_class($result), $result);

        if ($result->ReturnStatus !== 1) {
            throw new \Exception($result->ReturnMessage);
        }

        return $result;
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

    public function asCommand(Command $command): void
    {
    }

}
