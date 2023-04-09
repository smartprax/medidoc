<?php

namespace Smartprax\Medidoc\Entities;

class Camt54FileResponse
{
    private int $ReturnStatus;

    private string $ReturnMessage;

    private ArrayOfString $Camt54FileList;

    private string $AcknowledgmentToken;

    public function getReturnStatus(): int
    {
        return $this->ReturnStatus;
    }

    public function withReturnStatus(int $ReturnStatus): Camt54FileResponse|static
    {
        $new = clone $this;
        $new->ReturnStatus = $ReturnStatus;

        return $new;
    }

    public function getReturnMessage(): string
    {
        return $this->ReturnMessage;
    }

    public function withReturnMessage(string $ReturnMessage): Camt54FileResponse|static
    {
        $new = clone $this;
        $new->ReturnMessage = $ReturnMessage;

        return $new;
    }

    public function getCamt54FileList(): ArrayOfString
    {
        return $this->Camt54FileList;
    }

    public function withCamt54FileList(ArrayOfString $Camt54FileList): Camt54FileResponse|static
    {
        $new = clone $this;
        $new->Camt54FileList = $Camt54FileList;

        return $new;
    }

    public function getAcknowledgmentToken(): string
    {
        return $this->AcknowledgmentToken;
    }

    public function withAcknowledgmentToken(string $AcknowledgmentToken): Camt54FileResponse|static
    {
        $new = clone $this;
        $new->AcknowledgmentToken = $AcknowledgmentToken;

        return $new;
    }
}
