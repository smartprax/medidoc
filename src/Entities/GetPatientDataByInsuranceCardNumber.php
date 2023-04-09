<?php

namespace Smartprax\Medidoc\Entities;

class GetPatientDataByInsuranceCardNumber extends MedidocRequest
{
    public function __construct(public string $insuranceCardNumber)
    {}
}
