<?php

namespace Smartprax\Medidoc\Responses;

use Phpro\SoapClient\Type\ResultInterface;

class CheckConnectionResponse implements ResultInterface
{
    public function __construct(public int $CheckConnectionResult)
    {}
}
