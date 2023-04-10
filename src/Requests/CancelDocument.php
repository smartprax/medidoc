<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Responses\CancelDocumentResponse;

class CancelDocument extends MedidocRequest
{
    public function handle(string $medidocDocumentGID): CancelDocumentResponse
    {
        return $this->call(\compact('medidocDocumentGID'));
    }
}
