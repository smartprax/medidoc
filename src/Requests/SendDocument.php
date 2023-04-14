<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Entities\DocumentData;
use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\SendDocumentResponse;

/**
 * @see http://api.medidoc.ch/methods/senddocument/
 *
 * @method SendDocumentResponse run(DocumentData $documentData)
 */
class SendDocument extends MedidocRequest
{
    public function handle(DocumentData $documentData) : SendDocumentResponse
    {
        return Medidoc::call($this, \compact('documentData'));
    }
}
