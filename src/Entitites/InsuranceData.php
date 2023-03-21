<?php

namespace Smartprax\Medidoc\Entitites;

use Smartprax\Medidoc\Enumerations\InsuranceType;
use Spatie\LaravelData\Attributes\Validation\Max;
use Spatie\LaravelData\Data;

class InsuranceData extends Data
{
    public function __construct(
        public int $AddressId,

        #[Max(20)]
        public string $GLN,

        #[Max(100)]
        public string $Organisation,

        #[Max(50)]
        public string $Departement,

        #[Max(50)]
        public string $Street,

        #[Max(50)]
        public string $POBox,

        #[Max(10)]
        public string $Zip,

        #[Max(50)]
        public string $City,

        #[Max(10)]
        public string $Canton,

        #[Max(50)]
        public string $Phone,

        #[Max(50)]
        public string $Fax,

        #[Max(50)]
        public string $Url,

        #[Max(100)]
        public string $Email,

        #[Max(10)]
        public string $BSV,

        #[Max(20)]
        public string $DestinationGLN,

        public InsuranceType $InsuranceType,
    ) {}
}
