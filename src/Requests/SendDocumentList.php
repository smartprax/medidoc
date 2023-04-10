<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Entities\ArrayOfDocumentData;
use Smartprax\Medidoc\Responses\SendDocumentListResponse;

class SendDocumentList extends MedidocRequest
{
    public function handle(ArrayOfDocumentData $documentDataList) : SendDocumentListResponse
    {
        return $this->call(\compact('documentDataList'));
    }
}
