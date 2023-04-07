<?php

namespace Smartprax\Medidoc\Type;

class ArrayOfInsuranceData
{
    /** @var InsuranceData[] $InsuranceData */
    public function __construct(public array $InsuranceData)
    {}
}
