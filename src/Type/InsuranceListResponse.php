<?php

namespace Smartprax\Medidoc\Type;

class InsuranceListResponse
{
    private int $ReturnStatus;

    private string $ReturnMessage;

    private ArrayOfInsuranceData $AddressList;

    public function getReturnStatus(): int
    {
        return $this->ReturnStatus;
    }

    public function withReturnStatus(int $ReturnStatus): InsuranceListResponse|static
    {
        $new = clone $this;
        $new->ReturnStatus = $ReturnStatus;

        return $new;
    }

    public function getReturnMessage(): string
    {
        return $this->ReturnMessage;
    }

    public function withReturnMessage(string $ReturnMessage): InsuranceListResponse|static
    {
        $new = clone $this;
        $new->ReturnMessage = $ReturnMessage;

        return $new;
    }

    public function getAddressList(): ArrayOfInsuranceData
    {
        return $this->AddressList;
    }

    public function withAddressList(ArrayOfInsuranceData $AddressList): InsuranceListResponse|static
    {
        $new = clone $this;
        $new->AddressList = $AddressList;

        return $new;
    }
}
