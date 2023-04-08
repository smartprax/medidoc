<?php

namespace Smartprax\Medidoc\Type;


class GetNewInsuranceAddressByDocumentID extends MedidocRequest
{
    public function __construct(public string $documentID)
    {}
}
