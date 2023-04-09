<?php

namespace Smartprax\Medidoc\Entities;


class GetNewInsuranceAddressByDocumentID extends MedidocRequest
{
    public function __construct(public string $documentID)
    {}
}
