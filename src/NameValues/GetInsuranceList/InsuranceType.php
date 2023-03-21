<?php

namespace Smartprax\Medidoc\NameValues\GetInsuranceList;

use Smartprax\Medidoc\Entitites\NameValue;
use Spatie\LaravelData\Attributes\Validation\In;

class InsuranceType extends NameValue
{

    public function __construct(

        #[In(['KVG', 'UVG', 'IVG', 'MVG', 'ORG', 'VVG'])]
        protected string $insuranceType

    ) {}

    public function value(): string
    {
        return (\strval(\Smartprax\Medidoc\Enumerations\InsuranceType::from($this->insuranceType)->value));
    }
}
