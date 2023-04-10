<?php

namespace Smartprax\Medidoc\Entities;

class PatientData
{
    public function __construct(
        public string $AhvNumber,
        public string $MobilePhoneNumber,
        public string $Email,
    )
    {}
}
