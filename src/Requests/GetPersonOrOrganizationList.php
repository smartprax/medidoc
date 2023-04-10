<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Entities\ArrayOfNameValue;
use Smartprax\Medidoc\Responses\GetPersonOrOrganizationListResponse;

class GetPersonOrOrganizationList extends MedidocRequest
{
    public function handle( ArrayOfNameValue $filterParameters) : GetPersonOrOrganizationListResponse
    {
        return $this->call(compact('filterParameters'));
    }

}
