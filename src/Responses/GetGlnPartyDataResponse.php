<?php

namespace Smartprax\Medidoc\Responses;

class GetGlnPartyDataResponse extends GenericResponse
{
    public function __construct(public GlnPartyDataResponse $GetGlnPartyDataResult)
    {
    }
}
