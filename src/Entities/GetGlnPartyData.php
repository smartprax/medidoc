<?php

namespace Smartprax\Medidoc\Entities;

class GetGlnPartyData extends MedidocRequest
{
    public function __construct(public ArrayOfNameValue $filterParameters)
    {}
}
