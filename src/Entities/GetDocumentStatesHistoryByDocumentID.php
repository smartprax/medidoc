<?php

namespace Smartprax\Medidoc\Entities;

class GetDocumentStatesHistoryByDocumentID extends MedidocRequest
{
    public function __construct(public string $documentID)
    {}
}
