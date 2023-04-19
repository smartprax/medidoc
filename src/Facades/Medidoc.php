<?php

namespace Smartprax\Medidoc\Facades;

use Illuminate\Support\Facades\Facade;
use Smartprax\Medidoc\MedidocException;
use Smartprax\Medidoc\Methods\MedidocMethod;

/**
 * @method static \stdClass call(MedidocMethod $method, array $parameters)
 */
class Medidoc extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Smartprax\Medidoc\Medidoc::class;
    }
}
