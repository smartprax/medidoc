<?php

namespace Smartprax\Medidoc\Entities;

class GetDocumentResponseContent extends MedidocRequest
{
    public function __construct(
        public string $medidocDocumentGID,
        public bool $contentAsPdf
    )
    {}
}
