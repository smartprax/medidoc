<?php

namespace Smartprax\Medidoc\Methods;

use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\GetNewInsuranceAddressByDocumentIDResponse;

class GetNewInsuranceAddressByDocumentID extends MedidocMethod
{
    public function handle(string $documentID): GetNewInsuranceAddressByDocumentIDResponse
    {
        return Medidoc::call($this, \compact('documentID'));
    }
}
