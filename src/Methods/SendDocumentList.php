<?php

namespace Smartprax\Medidoc\Methods;

use Smartprax\Medidoc\Entities\ArrayOfDocumentData;
use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\SendDocumentListResponse;

class SendDocumentList extends MedidocMethod
{
    public function handle(ArrayOfDocumentData $documentDataList) : SendDocumentListResponse
    {
        return Medidoc::call($this, \compact('documentDataList'));
    }
}
