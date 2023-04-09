<?php

namespace Smartprax\Medidoc\Entities;

class CancelDocumentByDocumentID extends MedidocRequest
{
    public function __construct(public string $documentID)
    {}
}
