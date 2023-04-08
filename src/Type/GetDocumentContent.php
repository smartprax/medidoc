<?php

namespace Smartprax\Medidoc\Type;

class GetDocumentContent extends MedidocRequest
{
    public function __construct(
        public string $medidocDocumentGID,
        public bool $contentAsPdf
    )
    {}
}
