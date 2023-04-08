<?php

namespace Smartprax\Medidoc\Type;

class CancelDocumentByDocumentID extends MedidocRequest
{
    public function __construct(public string $documentID)
    {}
}
