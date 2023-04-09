<?php

namespace Smartprax\Medidoc\Entities;

class CancelDocument extends MedidocRequest
{
    public function __construct(public string $medidocDocumentGID)
    {}
}
