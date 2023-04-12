<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\GetProviderConfigurationResponse;

class GetProviderConfiguration extends MedidocRequest
{
    public function handle() : GetProviderConfigurationResponse
    {
        return Medidoc::call($this, []);
    }
}
