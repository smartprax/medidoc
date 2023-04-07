<?php

namespace Smartprax\Medidoc\Type;

class GlnPartyDataResponse
{
    private int $ReturnStatus;

    private string $ReturnMessage;

    private ArrayOfGlnPartyData $AddressList;

    public function getReturnStatus(): int
    {
        return $this->ReturnStatus;
    }

    public function withReturnStatus(int $ReturnStatus): GlnPartyDataResponse|static
    {
        $new = clone $this;
        $new->ReturnStatus = $ReturnStatus;

        return $new;
    }

    public function getReturnMessage(): string
    {
        return $this->ReturnMessage;
    }

    public function withReturnMessage(string $ReturnMessage): GlnPartyDataResponse|static
    {
        $new = clone $this;
        $new->ReturnMessage = $ReturnMessage;

        return $new;
    }

    public function getAddressList(): ArrayOfGlnPartyData
    {
        return $this->AddressList;
    }

    public function withAddressList(ArrayOfGlnPartyData $AddressList): GlnPartyDataResponse|static
    {
        $new = clone $this;
        $new->AddressList = $AddressList;

        return $new;
    }
}
