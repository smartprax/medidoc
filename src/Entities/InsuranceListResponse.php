<?php

namespace Smartprax\Medidoc\Entities;

use Illuminate\Support\Collection;

class InsuranceListResponse
{
    public function __construct(

        /** @var InsuranceData[]  */
        public readonly Collection $AddressList
    )
    {
    }
}
