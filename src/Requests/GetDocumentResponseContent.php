<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\ContentResponse;

class GetDocumentResponseContent extends MedidocRequest
{
    public function handle(string $medidocDocumentGID, bool $contentAsPdf) : ContentResponse
    {
        return Medidoc::call($this, \compact('medidocDocumentGID', 'contentAsPdf'));
    }
}
