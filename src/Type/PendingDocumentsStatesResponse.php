<?php

namespace Smartprax\Medidoc\Type;

class PendingDocumentsStatesResponse
{
    private int $ReturnStatus;

    private string $ReturnMessage;

    private ArrayOfDocumentStatesResponse $DocumentStatesResponseList;

    public function getReturnStatus(): int
    {
        return $this->ReturnStatus;
    }

    public function withReturnStatus(int $ReturnStatus): PendingDocumentsStatesResponse|static
    {
        $new = clone $this;
        $new->ReturnStatus = $ReturnStatus;

        return $new;
    }

    public function getReturnMessage(): string
    {
        return $this->ReturnMessage;
    }

    public function withReturnMessage(string $ReturnMessage): PendingDocumentsStatesResponse|static
    {
        $new = clone $this;
        $new->ReturnMessage = $ReturnMessage;

        return $new;
    }

    public function getDocumentStatesResponseList(): ArrayOfDocumentStatesResponse
    {
        return $this->DocumentStatesResponseList;
    }

    public function withDocumentStatesResponseList(ArrayOfDocumentStatesResponse $DocumentStatesResponseList
    ): PendingDocumentsStatesResponse|static {
        $new = clone $this;
        $new->DocumentStatesResponseList = $DocumentStatesResponseList;

        return $new;
    }
}
