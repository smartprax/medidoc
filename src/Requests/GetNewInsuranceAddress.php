<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\GetNewInsuranceAddressResponse;

class GetNewInsuranceAddress extends MedidocRequest
{
    public function handle(string $medidocDocumentGID) : GetNewInsuranceAddressResponse
    {
        return Medidoc::call($this, \compact('medidocDocumentGID'));
    }
}
