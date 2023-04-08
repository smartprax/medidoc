<?php

namespace Smartprax\Medidoc\Type;

class GetInsuranceList extends MedidocRequest
{
    public function __construct(public ArrayOfNameValue $filterParameters)
    {}
}
