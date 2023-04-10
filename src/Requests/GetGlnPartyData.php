<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Entities\ArrayOfNameValue;
use Smartprax\Medidoc\Responses\GetGlnPartyDataResponse;

class GetGlnPartyData extends MedidocRequest
{
    public function handle(ArrayOfNameValue $filterParameters) : GetGlnPartyDataResponse
    {
        return $this->call(\compact('filterParameters'));
    }
}
