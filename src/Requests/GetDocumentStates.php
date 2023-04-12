<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\GetDocumentStatesResponse;

class GetDocumentStates extends MedidocRequest
{
    public function handle(string $medidocDocumentGID) : GetDocumentStatesResponse
    {
        return Medidoc::call($this, \compact('medidocDocumentGID'));
    }
}
