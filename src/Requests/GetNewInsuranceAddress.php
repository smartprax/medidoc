<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Responses\GetNewInsuranceAddressResponse;

class GetNewInsuranceAddress extends MedidocRequest
{
    public function handle(string $medidocDocumentGID) : GetNewInsuranceAddressResponse
    {
        return $this->call(\compact('medidocDocumentGID'));
    }
}
