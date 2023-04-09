<?php

namespace Smartprax\Medidoc\Entities;

class PersonOrOrganizationListResponse
{
    private int $ReturnStatus;

    private string $ReturnMessage;

    private ArrayOfPersonOrOrganization $AddressList;

    public function getReturnStatus(): int
    {
        return $this->ReturnStatus;
    }

    public function withReturnStatus(int $ReturnStatus): PersonOrOrganizationListResponse|static
    {
        $new = clone $this;
        $new->ReturnStatus = $ReturnStatus;

        return $new;
    }

    public function getReturnMessage(): string
    {
        return $this->ReturnMessage;
    }

    public function withReturnMessage(string $ReturnMessage): PersonOrOrganizationListResponse|static
    {
        $new = clone $this;
        $new->ReturnMessage = $ReturnMessage;

        return $new;
    }

    public function getAddressList(): ArrayOfPersonOrOrganization
    {
        return $this->AddressList;
    }

    public function withAddressList(ArrayOfPersonOrOrganization $AddressList): PersonOrOrganizationListResponse|static
    {
        $new = clone $this;
        $new->AddressList = $AddressList;

        return $new;
    }
}
