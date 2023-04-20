<?php

declare(strict_types=1);

namespace Smartprax\Medidoc\Facades;

use Illuminate\Support\Facades\Facade;
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
