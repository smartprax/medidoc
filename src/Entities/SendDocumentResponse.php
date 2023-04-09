<?php

namespace Smartprax\Medidoc\Entities;

use Phpro\SoapClient\Type\ResultInterface;

class SendDocumentResponse implements ResultInterface
{
    private SendDocumentResponse $SendDocumentResult;

    private int $ReturnStatus;

    private string $ReturnMessage;

    private string $FolderGID;

    private string $DocumentGID;

    private string $DocumentID;

    private int $DocumentWorkflowStatus;

    private \DateTimeInterface $UploadDateTime;

    public function getSendDocumentResult(): SendDocumentResponse
    {
        return $this->SendDocumentResult;
    }

    public function withSendDocumentResult(SendDocumentResponse $SendDocumentResult): SendDocumentResponse|static
    {
        $new = clone $this;
        $new->SendDocumentResult = $SendDocumentResult;

        return $new;
    }

    public function getReturnStatus(): int
    {
        return $this->ReturnStatus;
    }

    public function withReturnStatus(int $ReturnStatus): SendDocumentResponse|static
    {
        $new = clone $this;
        $new->ReturnStatus = $ReturnStatus;

        return $new;
    }

    public function getReturnMessage(): string
    {
        return $this->ReturnMessage;
    }

    public function withReturnMessage(string $ReturnMessage): SendDocumentResponse|static
    {
        $new = clone $this;
        $new->ReturnMessage = $ReturnMessage;

        return $new;
    }

    public function getFolderGID(): string
    {
        return $this->FolderGID;
    }

    public function withFolderGID(string $FolderGID): SendDocumentResponse|static
    {
        $new = clone $this;
        $new->FolderGID = $FolderGID;

        return $new;
    }

    public function getDocumentGID(): string
    {
        return $this->DocumentGID;
    }

    public function withDocumentGID(string $DocumentGID): SendDocumentResponse|static
    {
        $new = clone $this;
        $new->DocumentGID = $DocumentGID;

        return $new;
    }

    public function getDocumentID(): string
    {
        return $this->DocumentID;
    }

    public function withDocumentID(string $DocumentID): SendDocumentResponse|static
    {
        $new = clone $this;
        $new->DocumentID = $DocumentID;

        return $new;
    }

    public function getDocumentWorkflowStatus(): int
    {
        return $this->DocumentWorkflowStatus;
    }

    public function withDocumentWorkflowStatus(int $DocumentWorkflowStatus): SendDocumentResponse|static
    {
        $new = clone $this;
        $new->DocumentWorkflowStatus = $DocumentWorkflowStatus;

        return $new;
    }

    public function getUploadDateTime(): \DateTimeInterface
    {
        return $this->UploadDateTime;
    }

    public function withUploadDateTime(\DateTimeInterface $UploadDateTime): SendDocumentResponse|static
    {
        $new = clone $this;
        $new->UploadDateTime = $UploadDateTime;

        return $new;
    }
}
