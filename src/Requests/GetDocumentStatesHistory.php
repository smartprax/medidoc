<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\ArrayOfDocumentsStatesResponse;
use Smartprax\Medidoc\Responses\DocumentStatesResponse;

/**
 * @method DocumentStatesResponse run(string $medidocDocumentGID)
 */
class GetDocumentStatesHistory extends MedidocRequest
{
    public function handle(string $medidocDocumentGID) : ArrayOfDocumentsStatesResponse
    {
        return Medidoc::call($this, compact('medidocDocumentGID'));
    }
}
