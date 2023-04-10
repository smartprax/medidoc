<?php

namespace Smartprax\Medidoc\Responses;

use Smartprax\Medidoc\Entities\PatientFullData;

class GetPatientDataByInsuranceCardNumberResponse extends GenericResponse
{
    public function __construct(public PatientFullData $GetPatientDataByInsuranceCardNumberResult)
    {
    }
}
