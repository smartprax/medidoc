<?php

namespace Smartprax\Medidoc\Methods;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Lorisleiva\Actions\Concerns\AsAction;
use Lorisleiva\Actions\Concerns\AsCommand;
use Stringable;

abstract class Method
{
    use AsAction,
        AsCommand;

    abstract public function request();

    abstract public function response();

    public function name() : Stringable
    {
        return Str::of(get_class($this))
            ->replace('\\', '/')
            ->basename();
    }

    /**
     * @throws \Exception
     */
    public function handle() : void
    {

    }

    public function getCommandSignature() :string
    {
        return $this->name()
            ->snake('-')
            ->prepend('medidoc:');
    }

    public function asCommand(Command $command): void
    {
        $this->handle();
    }
}
