<?php

namespace Smartprax\Medidoc\Type;

class GetPersonOrOrganizationList extends MedidocRequest
{
    public function __construct(public ArrayOfNameValue $filterParameters)
    {}

}
