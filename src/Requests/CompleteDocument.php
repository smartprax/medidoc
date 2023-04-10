<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Responses\CompleteDocumentResponse;

class CompleteDocument extends MedidocRequest
{
    public function handle(string $medidocDocumentGID, \DateTimeInterface $completeDate) : CompleteDocumentResponse
    {
        return $this->call(\compact('medidocDocumentGID', $completeDate));
    }

}
