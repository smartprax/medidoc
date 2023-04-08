<?php

namespace Smartprax\Medidoc\Type;

class GetDocumentResponseContentByDocumentID extends MedidocRequest
{
    public function __construct(
        public string $documentID,
        public bool $contentAsPdf
    )
    {}
}
