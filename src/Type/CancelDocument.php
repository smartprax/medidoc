<?php

namespace Smartprax\Medidoc\Type;

class CancelDocument extends MedidocRequest
{
    public function __construct(public string $medidocDocumentGID)
    {}
}
