<?php

namespace Smartprax\Medidoc\Entitites;

use Illuminate\Support\Str;
use Spatie\LaravelData\Data;

abstract class NameValue extends Data
{
    public function name() : string
    {
        return Str::snake(
            basename(
                str_replace('\\', '/', get_class($this))
            )
        );
    }
    abstract public function value() : string;
}
