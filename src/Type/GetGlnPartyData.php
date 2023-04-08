<?php

namespace Smartprax\Medidoc\Type;

class GetGlnPartyData extends MedidocRequest
{
    public function __construct(public ArrayOfNameValue $filterParameters)
    {}
}
