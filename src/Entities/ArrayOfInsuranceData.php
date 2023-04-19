<?php

namespace Smartprax\Medidoc\Entities;

class ArrayOfInsuranceData
{
    /** @var InsuranceData[] */
    public function __construct(public array $InsuranceData)
    {
    }
}
