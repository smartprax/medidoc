<?php

namespace Smartprax\Medidoc\Entities;

class FolderContentResponse
{
    private int $ReturnStatus;

    private string $ReturnMessage;

    private string $FolderGID;

    private ArrayOfGuid $DocumentGIDList;

    public function getReturnStatus(): int
    {
        return $this->ReturnStatus;
    }

    public function withReturnStatus(int $ReturnStatus): FolderContentResponse|static
    {
        $new = clone $this;
        $new->ReturnStatus = $ReturnStatus;

        return $new;
    }

    public function getReturnMessage(): string
    {
        return $this->ReturnMessage;
    }

    public function withReturnMessage(string $ReturnMessage): FolderContentResponse|static
    {
        $new = clone $this;
        $new->ReturnMessage = $ReturnMessage;

        return $new;
    }

    public function getFolderGID(): string
    {
        return $this->FolderGID;
    }

    public function withFolderGID(string $FolderGID): FolderContentResponse|static
    {
        $new = clone $this;
        $new->FolderGID = $FolderGID;

        return $new;
    }

    public function getDocumentGIDList(): ArrayOfGuid
    {
        return $this->DocumentGIDList;
    }

    public function withDocumentGIDList(ArrayOfGuid $DocumentGIDList): FolderContentResponse|static
    {
        $new = clone $this;
        $new->DocumentGIDList = $DocumentGIDList;

        return $new;
    }
}
