<?php

namespace Smartprax\Medidoc\Responses;

use Smartprax\Medidoc\Entities\PatientFullData;

class GetPatientDataByPatientIdentityDetailsResponse extends GenericResponse
{
    public function __construct(public PatientFullData $GetPatientDataByPatientIdentityDetailsResult)
    {
    }
}
