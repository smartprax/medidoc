<?php

namespace Smartprax\Medidoc\Type;

class GetDocumentStatesHistoryByDocumentID extends MedidocRequest
{
    public function __construct(public string $documentID)
    {}
}
