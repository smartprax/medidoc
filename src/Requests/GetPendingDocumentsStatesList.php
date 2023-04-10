<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Responses\GetPendingDocumentsStatesListResponse;

class GetPendingDocumentsStatesList extends MedidocRequest
{
    public function handle() : GetPendingDocumentsStatesListResponse
    {
        return $this->call([]);
    }
}
