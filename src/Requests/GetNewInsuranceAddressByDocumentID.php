<?php

namespace Smartprax\Medidoc\Requests;



use Smartprax\Medidoc\Responses\GetNewInsuranceAddressByDocumentIDResponse;

class GetNewInsuranceAddressByDocumentID extends MedidocRequest
{
    public function handle(string $documentID) : GetNewInsuranceAddressByDocumentIDResponse
    {
        return $this->call(\compact('documentID'));
    }
}
