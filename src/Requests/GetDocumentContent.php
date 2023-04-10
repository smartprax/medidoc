<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Responses\GetDocumentContentResponse;

class GetDocumentContent extends MedidocRequest
{
    public function handle(string $medidocDocumentGID, bool $contentAsPdf) : GetDocumentContentResponse
    {
        return $this->call(\compact('medidocDocumentGID', 'contentAsPdf'));
    }
}
