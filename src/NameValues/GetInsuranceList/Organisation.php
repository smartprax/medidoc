<?php

namespace Smartprax\Medidoc\NameValues\GetInsuranceList;

use Smartprax\Medidoc\Entitites\NameValue;

class Organisation extends NameValue
{
    public function __construct(
        protected string $name
    ) {}

    public function value(): string
    {
        return ($this->name);
    }
}
