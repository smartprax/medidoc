<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\CheckConnectionResponse;

class CheckConnection extends MedidocRequest
{
    public function handle() : CheckConnectionResponse
    {
        return Medidoc::call($this, []);
    }
}
