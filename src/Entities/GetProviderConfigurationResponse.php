<?php

namespace Smartprax\Medidoc\Entities;

use Phpro\SoapClient\Type\ResultInterface;

class GetProviderConfigurationResponse implements ResultInterface
{
    private ProviderConfigurationResponse $GetProviderConfigurationResult;

    public function getGetProviderConfigurationResult(): ProviderConfigurationResponse
    {
        return $this->GetProviderConfigurationResult;
    }

    public function withGetProviderConfigurationResult(ProviderConfigurationResponse $GetProviderConfigurationResult
    ): GetProviderConfigurationResponse|static {
        $new = clone $this;
        $new->GetProviderConfigurationResult = $GetProviderConfigurationResult;

        return $new;
    }
}
