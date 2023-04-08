<?php

namespace Smartprax\Medidoc\Type;

class GetDocumentStatesByDocumentID extends MedidocRequest
{
    public function __construct(public string $documentID)
    {}
}
