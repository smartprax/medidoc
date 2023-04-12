<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\GetPendingDocumentsStatesListResponse;

class GetPendingDocumentsStatesList extends MedidocRequest
{
    public function handle() : GetPendingDocumentsStatesListResponse
    {
        return Medidoc::call($this, []);
    }
}
