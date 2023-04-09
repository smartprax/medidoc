<?php

namespace Smartprax\Medidoc\Entities;

class GetPatientDataByPatientIdentityDetails extends MedidocRequest
{
    public function __construct(
        public string $patientFirstname,
        public string $patientLastname,
        public \DateTimeInterface $patientBirthday,
        public string $patientGender,
        public \DateTimeInterface $treatmentDate,
        public string $zipCode
    )
    {}
}
