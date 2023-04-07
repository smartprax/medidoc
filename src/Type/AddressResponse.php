<?php

namespace Smartprax\Medidoc\Type;

class AddressResponse
{
    private int $ReturnStatus;

    private string $ReturnMessage;

    private string $FolderGID;

    private string $DocumentGID;

    private Address $AddressEntity;

    private bool $ElectronicDispatchment;

    public function getReturnStatus(): int
    {
        return $this->ReturnStatus;
    }

    public function withReturnStatus(int $ReturnStatus): AddressResponse|static
    {
        $new = clone $this;
        $new->ReturnStatus = $ReturnStatus;

        return $new;
    }

    public function getReturnMessage(): string
    {
        return $this->ReturnMessage;
    }

    public function withReturnMessage(string $ReturnMessage): AddressResponse|static
    {
        $new = clone $this;
        $new->ReturnMessage = $ReturnMessage;

        return $new;
    }

    public function getFolderGID(): string
    {
        return $this->FolderGID;
    }

    public function withFolderGID(string $FolderGID): AddressResponse|static
    {
        $new = clone $this;
        $new->FolderGID = $FolderGID;

        return $new;
    }

    public function getDocumentGID(): string
    {
        return $this->DocumentGID;
    }

    public function withDocumentGID(string $DocumentGID): AddressResponse|static
    {
        $new = clone $this;
        $new->DocumentGID = $DocumentGID;

        return $new;
    }

    public function getAddressEntity(): Address
    {
        return $this->AddressEntity;
    }

    public function withAddressEntity(Address $AddressEntity): AddressResponse|static
    {
        $new = clone $this;
        $new->AddressEntity = $AddressEntity;

        return $new;
    }

    public function getElectronicDispatchment(): bool
    {
        return $this->ElectronicDispatchment;
    }

    public function withElectronicDispatchment(bool $ElectronicDispatchment): AddressResponse|static
    {
        $new = clone $this;
        $new->ElectronicDispatchment = $ElectronicDispatchment;

        return $new;
    }
}
