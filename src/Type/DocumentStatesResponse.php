<?php

namespace Smartprax\Medidoc\Type;

class DocumentStatesResponse
{
    private int $ReturnStatus;

    private string $ReturnMessage;

    private string $FolderGID;

    private string $DocumentGID;

    private string $DocumentID;

    private string $AcknowledgmentToken;

    private ArrayOfDocumentStatus $DocumentStatesList;

    public function getReturnStatus(): int
    {
        return $this->ReturnStatus;
    }

    public function withReturnStatus(int $ReturnStatus): DocumentStatesResponse|static
    {
        $new = clone $this;
        $new->ReturnStatus = $ReturnStatus;

        return $new;
    }

    public function getReturnMessage(): string
    {
        return $this->ReturnMessage;
    }

    public function withReturnMessage(string $ReturnMessage): DocumentStatesResponse|static
    {
        $new = clone $this;
        $new->ReturnMessage = $ReturnMessage;

        return $new;
    }

    public function getFolderGID(): string
    {
        return $this->FolderGID;
    }

    public function withFolderGID(string $FolderGID): DocumentStatesResponse|static
    {
        $new = clone $this;
        $new->FolderGID = $FolderGID;

        return $new;
    }

    public function getDocumentGID(): string
    {
        return $this->DocumentGID;
    }

    public function withDocumentGID(string $DocumentGID): DocumentStatesResponse|static
    {
        $new = clone $this;
        $new->DocumentGID = $DocumentGID;

        return $new;
    }

    public function getDocumentID(): string
    {
        return $this->DocumentID;
    }

    public function withDocumentID(string $DocumentID): DocumentStatesResponse|static
    {
        $new = clone $this;
        $new->DocumentID = $DocumentID;

        return $new;
    }

    public function getAcknowledgmentToken(): string
    {
        return $this->AcknowledgmentToken;
    }

    public function withAcknowledgmentToken(string $AcknowledgmentToken): DocumentStatesResponse|static
    {
        $new = clone $this;
        $new->AcknowledgmentToken = $AcknowledgmentToken;

        return $new;
    }

    public function getDocumentStatesList(): ArrayOfDocumentStatus
    {
        return $this->DocumentStatesList;
    }

    public function withDocumentStatesList(ArrayOfDocumentStatus $DocumentStatesList): DocumentStatesResponse|static
    {
        $new = clone $this;
        $new->DocumentStatesList = $DocumentStatesList;

        return $new;
    }
}
