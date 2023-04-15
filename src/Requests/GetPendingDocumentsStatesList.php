<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\PendingDocumentsStatesResponse;

/**
 * @method PendingDocumentsStatesResponse run()
 */
class GetPendingDocumentsStatesList extends MedidocRequest
{
    public function handle() : PendingDocumentsStatesResponse
    {
        return Medidoc::call($this, []);
    }
}
