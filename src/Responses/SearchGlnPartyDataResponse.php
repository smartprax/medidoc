<?php

namespace Smartprax\Medidoc\Responses;

class SearchGlnPartyDataResponse extends GenericResponse
{
    public function __construct(public GlnPartyDataResponse $SearchGlnPartyDataResult)
    {}
}
