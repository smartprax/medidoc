<?php

namespace Smartprax\Medidoc\Methods;

use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\ArrayOfDocumentsStatesResponse;
use Smartprax\Medidoc\Responses\DocumentStatesResponse;

/**
 * @method DocumentStatesResponse run(string $medidocDocumentGID)
 */
class GetDocumentStatesHistory extends MedidocMethod
{
    public function handle(string $medidocDocumentGID) : ArrayOfDocumentsStatesResponse
    {
        return Medidoc::call($this, compact('medidocDocumentGID'));
    }
}
