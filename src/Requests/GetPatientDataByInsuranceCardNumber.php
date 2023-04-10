<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Responses\GetPatientDataByInsuranceCardNumberResponse;

class GetPatientDataByInsuranceCardNumber extends MedidocRequest
{
    public function handle(string $insuranceCardNumber) : GetPatientDataByInsuranceCardNumberResponse
    {
        return $this->call(\compact(['insuranceCardNumber']));
    }
}
