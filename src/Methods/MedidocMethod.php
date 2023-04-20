<?php

declare(strict_types=1);

namespace Smartprax\Medidoc\Methods;

use Illuminate\Support\Str;
use Illuminate\Support\Stringable;
use Lorisleiva\Actions\Concerns\AsAction;
use Lorisleiva\Actions\Concerns\AsCommand;

abstract class MedidocMethod
{
    use AsAction,
        AsCommand;

    public function method(): string
    {
        return $this
            ->className()
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

    private function className(): Stringable
    {
        return Str::of(get_class($this))
            ->replace('\\', '/')
            ->basename();
    }

}
