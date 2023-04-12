<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Medidoc;

class CancelDocumentByDocumentID extends MedidocRequest
{
    public function handle(string $documentID)
    {
        Medidoc::call($this, \compact($documentID));
    }
}
