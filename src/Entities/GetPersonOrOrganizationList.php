<?php

namespace Smartprax\Medidoc\Entities;

class GetPersonOrOrganizationList extends MedidocRequest
{
    public function __construct(public ArrayOfNameValue $filterParameters)
    {}

}
