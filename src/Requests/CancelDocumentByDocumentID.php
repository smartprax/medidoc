<?php

namespace Smartprax\Medidoc\Requests;

class CancelDocumentByDocumentID extends MedidocRequest
{
    public function handle(string $documentID)
    {
        $this->call(\compact($documentID));
    }
}
