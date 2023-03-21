<?php

namespace Smartprax\Medidoc\NameValues\GetInsuranceList;

use Smartprax\Medidoc\Entitites\NameValue;

class Canton extends NameValue
{
    public function __construct(
        protected string $canton
    ) {}

    public function value(): string
    {
        return ($this->canton);
    }
}
