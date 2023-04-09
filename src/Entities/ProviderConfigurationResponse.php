<?php

namespace Smartprax\Medidoc\Entities;

class ProviderConfigurationResponse
{
    private int $ReturnStatus;

    private string $ReturnMessage;

    private ArrayOfNameValue $PropertiesList;

    public function getReturnStatus(): int
    {
        return $this->ReturnStatus;
    }

    public function withReturnStatus(int $ReturnStatus): ProviderConfigurationResponse|static
    {
        $new = clone $this;
        $new->ReturnStatus = $ReturnStatus;

        return $new;
    }

    public function getReturnMessage(): string
    {
        return $this->ReturnMessage;
    }

    public function withReturnMessage(string $ReturnMessage): ProviderConfigurationResponse|static
    {
        $new = clone $this;
        $new->ReturnMessage = $ReturnMessage;

        return $new;
    }

    public function getPropertiesList(): ArrayOfNameValue
    {
        return $this->PropertiesList;
    }

    public function withPropertiesList(ArrayOfNameValue $PropertiesList): ProviderConfigurationResponse|static
    {
        $new = clone $this;
        $new->PropertiesList = $PropertiesList;

        return $new;
    }
}
