<?php

declare(strict_types=1);

namespace Smartprax\Medidoc\Entities;

use Illuminate\Support\Collection;

class PersonOrOrganizationListResponse
{
    public function __construct(

        /** @var PersonOrOrganization[] */
        public readonly Collection $AddressList
    ) {
    }
}
