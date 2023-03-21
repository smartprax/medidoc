<?php

namespace Smartprax\Medidoc\NameValues\DocumentData;

use Smartprax\Medidoc\Entitites\NameValue;

class SendPatientCopy extends NameValue
{
    public function __construct(
        protected bool $send = false
    ) {}

    public function value(): string
    {
        return strval(\intval($this->send));
    }
}
