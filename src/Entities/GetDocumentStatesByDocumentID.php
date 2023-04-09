<?php

namespace Smartprax\Medidoc\Entities;

class GetDocumentStatesByDocumentID extends MedidocRequest
{
    public function __construct(public string $documentID)
    {}
}
