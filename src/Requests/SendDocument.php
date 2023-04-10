<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Entities\DocumentData;
use Smartprax\Medidoc\Responses\SendDocumentResponse;

class SendDocument extends MedidocRequest
{
    public function handle(DocumentData $documentData) : SendDocumentResponse
    {
        $this->call(\compact($documentData));
    }
}
