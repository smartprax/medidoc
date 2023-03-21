<?php

namespace Smartprax\Medidoc\NameValues\GetInsuranceList;

use Smartprax\Medidoc\Entitites\NameValue;
use Spatie\LaravelData\Attributes\Validation\Size;

class Ean extends NameValue
{
    public function __construct(
        #[Size(13)]
        protected string $gln
    ) {}

    public function value(): string
    {
        return ($this->gln);
    }
}
