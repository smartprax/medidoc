<?php

namespace Smartprax\Medidoc\Responses;

use Smartprax\Medidoc\Entities\ArrayOfGlnPartyData;

class GlnPartyDataResponse extends GenericResponse
{
    public function __construct(public ArrayOfGlnPartyData $AddressList)
    {}
}
