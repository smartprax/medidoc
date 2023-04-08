<?php

namespace Smartprax\Medidoc\Type;

class GetDocumentStates extends MedidocRequest
{
    public function __construct(public string $medidocDocumentGID)
    {}
}
