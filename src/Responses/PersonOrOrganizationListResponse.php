<?php

namespace Smartprax\Medidoc\Responses;

use Smartprax\Medidoc\Entities\ArrayOfPersonOrOrganization;

class PersonOrOrganizationListResponse extends GenericResponse
{
    public function __construct(public ArrayOfPersonOrOrganization $AddressList)
    {}
}
