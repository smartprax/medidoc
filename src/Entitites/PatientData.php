<?php

namespace Smartprax\Medidoc\Entitites;

use Spatie\LaravelData\Attributes\Validation\Max;
use Spatie\LaravelData\Data;

class PatientData extends Data
{
    public function __construct(

        #[Max(20)]
        public string $AhvNumber,

        #[Max(50)]
        public string $MobilePhoneNumber,

        #[Max(100)]
        public string $Email,
    )
    {}
}
