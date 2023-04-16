<?php

namespace Smartprax\Medidoc\Methods;

use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\GetPatientDataByInsuranceCardNumberResponse;

class GetPatientDataByInsuranceCardNumber extends MedidocMethod
{
    public function handle(string $insuranceCardNumber) : GetPatientDataByInsuranceCardNumberResponse
    {
        return Medidoc::call($this, \compact(['insuranceCardNumber']));
    }
}
