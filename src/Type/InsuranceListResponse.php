<?php

namespace Smartprax\Medidoc\Type;

class InsuranceListResponse
{
    public function __construct(
        public readonly int $ReturnStatus,
        public readonly string $ReturnMessage,
        public readonly ArrayOfInsuranceData $AddressList
    )
    {}
}
