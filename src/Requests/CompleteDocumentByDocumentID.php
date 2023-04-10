<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Responses\CompleteDocumentByDocumentIDResponse;

class CompleteDocumentByDocumentID extends MedidocRequest
{
    public function handle(string $documentID, \DateTimeInterface $completeDate) : CompleteDocumentByDocumentIDResponse
    {
        return $this->call(\compact('documentID', $completeDate));
    }
}
