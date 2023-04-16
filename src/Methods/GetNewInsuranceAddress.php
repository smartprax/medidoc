<?php

namespace Smartprax\Medidoc\Methods;

use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\GetNewInsuranceAddressResponse;

class GetNewInsuranceAddress extends MedidocMethod
{
    public function handle(string $medidocDocumentGID) : GetNewInsuranceAddressResponse
    {
        return Medidoc::call($this, \compact('medidocDocumentGID'));
    }
}
