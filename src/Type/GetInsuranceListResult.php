<?php

namespace Smartprax\Medidoc\Type;

class GetInsuranceListResult
{
    public function __construct(
        public readonly int $ReturnStatus,
        public readonly string $ReturnMessage,
        public readonly ArrayOfInsuranceData $AddressList
    )
    {}
}
