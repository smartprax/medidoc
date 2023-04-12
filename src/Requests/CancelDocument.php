<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\CancelDocumentResponse;

class CancelDocument extends MedidocRequest
{
    public function handle(string $medidocDocumentGID): CancelDocumentResponse
    {
        return Medidoc::call($this, \compact('medidocDocumentGID'));
    }
}
