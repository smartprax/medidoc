<?php

declare(strict_types=1);

namespace Smartprax\Medidoc\Entities;

class InsuranceData
{
    public function __construct(
        public readonly int $PartnerID,
        public readonly string $Gln,
        public readonly string $Organisation,
        public readonly string $Department,
        public readonly string $Street,
        public readonly string $Pobox,
        public readonly int $Zip,
        public readonly string $City,
        public readonly string $Canton,
        public readonly string $Country,
        public readonly string $Phone,
        public readonly string $Fax,
        public readonly string $Url,
        public readonly string $Email,
        public readonly string $Bsv,
        public readonly string $GlnDestination,
        public readonly int $InsuranceType,
    ) {
    }
}
