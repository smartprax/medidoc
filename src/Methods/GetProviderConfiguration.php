<?php

namespace Smartprax\Medidoc\Methods;

use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\GetProviderConfigurationResponse;

class GetProviderConfiguration extends MedidocMethod
{
    public function handle() : GetProviderConfigurationResponse
    {
        return Medidoc::call($this, []);
    }
}
