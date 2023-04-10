<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Responses\GetDocumentStatesResponse;

class GetDocumentStates extends MedidocRequest
{
    public function handle(string $medidocDocumentGID) : GetDocumentStatesResponse
    {
        return $this->call(\compact('medidocDocumentGID'));
    }
}
