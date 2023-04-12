<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Entities\ArrayOfNameValue;
use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\GetGlnPartyDataResponse;

class GetGlnPartyData extends MedidocRequest
{
    public function handle(ArrayOfNameValue $filterParameters) : GetGlnPartyDataResponse
    {
        return Medidoc::call($this, \compact('filterParameters'));
    }
}
