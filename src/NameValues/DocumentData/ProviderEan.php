<?php

namespace Smartprax\Medidoc\NameValues\DocumentData;

use Smartprax\Medidoc\Entitites\NameValue;

class ProviderEan extends NameValue
{
    public function __construct(
        protected string $ean
    ) {}

    public function value(): string
    {
        return $this->ean;
    }
}
