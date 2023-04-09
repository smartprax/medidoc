<?php

namespace Smartprax\Medidoc\Entities;

class ContentResponse
{
    private int $ReturnStatus;

    private string $ReturnMessage;

    private string $FolderGID;

    private string $DocumentGID;

    private string $DocumentID;

    private string $DocumentContent;

    private int $FileType;

    public function getReturnStatus(): int
    {
        return $this->ReturnStatus;
    }

    public function withReturnStatus(int $ReturnStatus): ContentResponse|static
    {
        $new = clone $this;
        $new->ReturnStatus = $ReturnStatus;

        return $new;
    }

    public function getReturnMessage(): string
    {
        return $this->ReturnMessage;
    }

    public function withReturnMessage(string $ReturnMessage): ContentResponse|static
    {
        $new = clone $this;
        $new->ReturnMessage = $ReturnMessage;

        return $new;
    }

    public function getFolderGID(): string
    {
        return $this->FolderGID;
    }

    public function withFolderGID(string $FolderGID): ContentResponse|static
    {
        $new = clone $this;
        $new->FolderGID = $FolderGID;

        return $new;
    }

    public function getDocumentGID(): string
    {
        return $this->DocumentGID;
    }

    public function withDocumentGID(string $DocumentGID): ContentResponse|static
    {
        $new = clone $this;
        $new->DocumentGID = $DocumentGID;

        return $new;
    }

    public function getDocumentID(): string
    {
        return $this->DocumentID;
    }

    public function withDocumentID(string $DocumentID): ContentResponse|static
    {
        $new = clone $this;
        $new->DocumentID = $DocumentID;

        return $new;
    }

    public function getDocumentContent(): string
    {
        return $this->DocumentContent;
    }

    public function withDocumentContent(string $DocumentContent): ContentResponse|static
    {
        $new = clone $this;
        $new->DocumentContent = $DocumentContent;

        return $new;
    }

    public function getFileType(): int
    {
        return $this->FileType;
    }

    public function withFileType(int $FileType): ContentResponse|static
    {
        $new = clone $this;
        $new->FileType = $FileType;

        return $new;
    }
}
