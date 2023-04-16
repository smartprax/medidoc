<?php

namespace Smartprax\Medidoc\Methods;

use Smartprax\Medidoc\Entities\ArrayOfDocumentStatus;
use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\ArrayOfDocumentsStatesResponse;

/**
 * @method ArrayOfDocumentsStatesResponse run()
 */
class GetPendingDocumentsStatesList extends MedidocMethod
{
    public function handle() : ArrayOfDocumentsStatesResponse
    {
        return Medidoc::call($this, []);
    }
}
