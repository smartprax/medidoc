<?php

namespace Smartprax\Medidoc\NameValues\GetInsuranceList;

use Smartprax\Medidoc\Entitites\NameValue;

class City extends NameValue
{
    public function __construct(
        protected string $city
    ) {}

    public function value(): string
    {
        return ($this->city);
    }
}
