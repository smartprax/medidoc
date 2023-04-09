<?php

namespace Smartprax\Medidoc\Entities;

class GetDocumentContent extends MedidocRequest
{
    public function __construct(
        public string $medidocDocumentGID,
        public bool $contentAsPdf
    )
    {}
}
