<?php

namespace Smartprax\Medidoc\Type;

class GetDocumentContentByDocumentID extends MedidocRequest
{
    public function __construct(
        public string $documentID,
        public bool $contentAsPdf
    )
    {}
}
