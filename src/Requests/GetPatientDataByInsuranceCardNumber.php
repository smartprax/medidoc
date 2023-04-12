<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\GetPatientDataByInsuranceCardNumberResponse;

class GetPatientDataByInsuranceCardNumber extends MedidocRequest
{
    public function handle(string $insuranceCardNumber) : GetPatientDataByInsuranceCardNumberResponse
    {
        return Medidoc::call($this, \compact(['insuranceCardNumber']));
    }
}
