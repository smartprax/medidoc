<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\GetDocumentContentResponse;

class GetDocumentContent extends MedidocRequest
{
    public function handle(string $medidocDocumentGID, bool $contentAsPdf) : GetDocumentContentResponse
    {
        return Medidoc::call($this, \compact('medidocDocumentGID', 'contentAsPdf'));
    }
}
