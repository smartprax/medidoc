<?php

namespace Smartprax\Medidoc\NameValues\GetInsuranceList;

use Smartprax\Medidoc\Entitites\NameValue;

class Street extends NameValue
{
    public function __construct(
        protected string $street
    ) {}

    public function value(): string
    {
        return ($this->street);
    }
}
