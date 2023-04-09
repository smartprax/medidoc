<?php

namespace Smartprax\Medidoc\Entities;

class GetInsuranceListResult
{
    public function __construct(
        public readonly int $ReturnStatus,
        public readonly string $ReturnMessage,
        public readonly ArrayOfInsuranceData $AddressList
    )
    {}
}
