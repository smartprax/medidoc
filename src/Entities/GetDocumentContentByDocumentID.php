<?php

namespace Smartprax\Medidoc\Entities;

class GetDocumentContentByDocumentID extends MedidocRequest
{
    public function __construct(
        public string $documentID,
        public bool $contentAsPdf
    )
    {}
}
