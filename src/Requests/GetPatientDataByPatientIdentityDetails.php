<?php

namespace Smartprax\Medidoc\Requests;

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
        return $this->call(\compact('patientFirstname', 'patientLastname', 'patientBirthday', 'patientGender', 'treatmentDate', 'zipCode'));
    }
}
