<?php

namespace Smartprax\Medidoc\Entities;

class GetDocumentResponseContentByDocumentID extends MedidocRequest
{
    public function __construct(
        public string $documentID,
        public bool $contentAsPdf
    )
    {}
}
