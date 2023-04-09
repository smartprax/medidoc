<?php

namespace Smartprax\Medidoc\Responses;

use Smartprax\Medidoc\Entities\ArrayOfInsuranceData;

class InsuranceListResponse extends MedidataResponse
{
    public function __construct(
        public readonly ArrayOfInsuranceData $AddressList
    )
    {}
}
