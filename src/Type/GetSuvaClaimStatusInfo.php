<?php

namespace Smartprax\Medidoc\Type;

class GetSuvaClaimStatusInfo extends MedidocRequest
{
    public function __construct(
        public int $requestType,
        public string $ssn,
        public string $claimNumber,
        public \DateTimeInterface $claimDate,
        public string $firstName,
        public string $lastName,
        public \DateTimeInterface $birthDate,
        public bool $useAlsoTreatmentDate,
        public \DateTimeInterface $treatmentDate
    )
    {}
}
