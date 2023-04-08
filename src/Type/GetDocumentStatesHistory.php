<?php

namespace Smartprax\Medidoc\Type;

class GetDocumentStatesHistory extends MedidocRequest
{
    public function __construct(public string $medidocDocumentGID)
    {}
}
