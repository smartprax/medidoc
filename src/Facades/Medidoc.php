<?php

namespace Smartprax\Medidoc\Facades;

use Illuminate\Support\Facades\Facade;
use Smartprax\Medidoc\Requests\MedidocRequest;

/**
 * @method static \stdClass call(MedidocRequest $method, array $parameters)
 */
class Medidoc extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Smartprax\Medidoc\Medidoc::class;
    }
}
