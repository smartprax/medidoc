<?php

namespace Smartprax\Medidoc\Entities;

class ArrayOfInsuranceData
{
    /** @var InsuranceData[] $InsuranceData */
    public function __construct(public array $InsuranceData)
    {}
}
