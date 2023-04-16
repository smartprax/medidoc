<?php

namespace Smartprax\Medidoc\Methods;

use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\GetDocumentStatesResponse;

class GetDocumentStates extends MedidocMethod
{
    public function handle(string $medidocDocumentGID) : GetDocumentStatesResponse
    {
        return Medidoc::call($this, \compact('medidocDocumentGID'));
    }
}
