<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\CompleteDocumentByDocumentIDResponse;

class CompleteDocumentByDocumentID extends MedidocRequest
{
    public function handle(string $documentID, \DateTimeInterface $completeDate) : CompleteDocumentByDocumentIDResponse
    {
        return Medidoc::call($this, \compact('documentID', $completeDate));
    }
}
