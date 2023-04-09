<?php

namespace Smartprax\Medidoc\Entities;

class GetDocumentStatesHistory extends MedidocRequest
{
    public function __construct(public string $medidocDocumentGID)
    {}
}
