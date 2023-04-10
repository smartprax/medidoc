<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Entities\ArrayOfDocumentData;

class SendDocumentList extends MedidocRequest
{
    public function handle(ArrayOfDocumentData $documentDataList)
    {
        $this->call(\compact('documentDataList'));
    }
}
