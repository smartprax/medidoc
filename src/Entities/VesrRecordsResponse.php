<?php

namespace Smartprax\Medidoc\Entities;

class VesrRecordsResponse
{
    private int $ReturnStatus;

    private string $ReturnMessage;

    private string $VesrRecords;

    private string $AcknowledgmentToken;

    public function getReturnStatus(): int
    {
        return $this->ReturnStatus;
    }

    public function withReturnStatus(int $ReturnStatus): VesrRecordsResponse|static
    {
        $new = clone $this;
        $new->ReturnStatus = $ReturnStatus;

        return $new;
    }

    public function getReturnMessage(): string
    {
        return $this->ReturnMessage;
    }

    public function withReturnMessage(string $ReturnMessage): VesrRecordsResponse|static
    {
        $new = clone $this;
        $new->ReturnMessage = $ReturnMessage;

        return $new;
    }

    public function getVesrRecords(): string
    {
        return $this->VesrRecords;
    }

    public function withVesrRecords(string $VesrRecords): VesrRecordsResponse|static
    {
        $new = clone $this;
        $new->VesrRecords = $VesrRecords;

        return $new;
    }

    public function getAcknowledgmentToken(): string
    {
        return $this->AcknowledgmentToken;
    }

    public function withAcknowledgmentToken(string $AcknowledgmentToken): VesrRecordsResponse|static
    {
        $new = clone $this;
        $new->AcknowledgmentToken = $AcknowledgmentToken;

        return $new;
    }
}
