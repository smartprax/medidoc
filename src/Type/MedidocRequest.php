<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\RequestInterface;

/**
 * Base class for all requests.
 *
 * gln and password are set in Smartprax\Medidoc\MedidocClientFactory.
 */
abstract class MedidocRequest implements RequestInterface
{
    public string $gln;
    public string $password;
}
