<?php

namespace Smartprax\Medidoc\Entities;

class GetDocumentStates extends MedidocRequest
{
    public function __construct(public string $medidocDocumentGID)
    {}
}
