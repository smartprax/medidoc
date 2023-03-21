<?php

namespace Smartprax\Medidoc\NameValues\DocumentData;

use Smartprax\Medidoc\Entitites\NameValue;

class AllowPrintService extends NameValue
{
    public function __construct(
        protected bool $value = false
    ) {}

    public function value(): string
    {
        return strval(\intval($this->value));
    }
}
