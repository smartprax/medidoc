<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\GetNewInsuranceAddressByDocumentIDResponse;

class GetNewInsuranceAddressByDocumentID extends MedidocRequest
{
    public function handle(string $documentID) : GetNewInsuranceAddressByDocumentIDResponse
    {
        return Medidoc::call($this, \compact('documentID'));
    }
}
