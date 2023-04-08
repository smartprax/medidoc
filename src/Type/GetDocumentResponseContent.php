<?php

namespace Smartprax\Medidoc\Type;

class GetDocumentResponseContent extends MedidocRequest
{
    public function __construct(
        public string $medidocDocumentGID,
        public bool $contentAsPdf
    )
    {}
}
