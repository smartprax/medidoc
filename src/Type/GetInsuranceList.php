<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetInsuranceList implements RequestInterface
{
    public function __construct(
        public string $gln,
        public string $password,
        public ArrayOfNameValue $filterParameters
    ) {}
}
