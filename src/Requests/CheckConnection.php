<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Responses\CheckConnectionResponse;

class CheckConnection extends MedidocRequest
{
    public function handle() : CheckConnectionResponse
    {
        return $this->call([]);
    }
}
