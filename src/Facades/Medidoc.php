<?php

namespace Smartprax\Medidoc\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Smartprax\Medidoc\Medidoc
 */
class Medidoc extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Smartprax\Medidoc\Medidoc::class;
    }
}
