<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\GetPatientDataByPatientIdentityDetailsResponse;

class GetPatientDataByPatientIdentityDetails extends MedidocRequest
{
    public function handle(
        string $patientFirstname,
        string $patientLastname,
        \DateTimeInterface $patientBirthday,
        string $patientGender,
        \DateTimeInterface $treatmentDate,
        string $zipCode
    ) : GetPatientDataByPatientIdentityDetailsResponse
    {
        return Medidoc::call($this, \compact('patientFirstname', 'patientLastname', 'patientBirthday', 'patientGender', 'treatmentDate', 'zipCode'));
    }
}
