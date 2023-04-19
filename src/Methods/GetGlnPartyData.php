<?php

namespace Smartprax\Medidoc\Methods;

use Smartprax\Medidoc\Entities\ArrayOfNameValue;
use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\GetGlnPartyDataResponse;

class GetGlnPartyData extends MedidocMethod
{
    public function handle(ArrayOfNameValue $filterParameters): GetGlnPartyDataResponse
    {
        return Medidoc::call($this, \compact('filterParameters'));
    }
}
