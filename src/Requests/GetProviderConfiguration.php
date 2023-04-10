<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Responses\GetProviderConfigurationResponse;

class GetProviderConfiguration extends MedidocRequest
{
    public function handle() : GetProviderConfigurationResponse
    {
        return $this->call([]);
    }
}
