<?php

namespace Smartprax\Medidoc\Type;

class GetPatientDataByInsuranceCardNumber extends MedidocRequest
{
    public function __construct(public string $insuranceCardNumber)
    {}
}
