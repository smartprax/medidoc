<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\CompleteDocumentResponse;

class CompleteDocument extends MedidocRequest
{
    public function handle(string $medidocDocumentGID, \DateTimeInterface $completeDate) : CompleteDocumentResponse
    {
        return Medidoc::call($this, \compact('medidocDocumentGID', $completeDate));
    }

}
