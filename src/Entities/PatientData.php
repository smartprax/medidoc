<?php

namespace Smartprax\Medidoc\Entities;

class PatientData
{
    public function __construct(
        public readonly string $AhvNumber,
        public readonly string $MobilePhoneNumber,
        public readonly string $Email,
    ) {
    }
}
