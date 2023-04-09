<?php

namespace Smartprax\Medidoc\Entities;

class ReminderInfo
{
    private string $FolderGID;

    private string $DocumentGID;

    private string $InvoiceID;

    private int $ReminderLevel;

    private float $ReminderAmount;

    private \DateTimeInterface $ReminderDate;

    private string $AcknowledgmentToken;

    public function getFolderGID(): string
    {
        return $this->FolderGID;
    }

    public function withFolderGID(string $FolderGID): ReminderInfo|static
    {
        $new = clone $this;
        $new->FolderGID = $FolderGID;

        return $new;
    }

    public function getDocumentGID(): string
    {
        return $this->DocumentGID;
    }

    public function withDocumentGID(string $DocumentGID): ReminderInfo|static
    {
        $new = clone $this;
        $new->DocumentGID = $DocumentGID;

        return $new;
    }

    public function getInvoiceID(): string
    {
        return $this->InvoiceID;
    }

    public function withInvoiceID(string $InvoiceID): ReminderInfo|static
    {
        $new = clone $this;
        $new->InvoiceID = $InvoiceID;

        return $new;
    }

    public function getReminderLevel(): int
    {
        return $this->ReminderLevel;
    }

    public function withReminderLevel(int $ReminderLevel): ReminderInfo|static
    {
        $new = clone $this;
        $new->ReminderLevel = $ReminderLevel;

        return $new;
    }

    public function getReminderAmount(): float
    {
        return $this->ReminderAmount;
    }

    public function withReminderAmount(float $ReminderAmount): ReminderInfo|static
    {
        $new = clone $this;
        $new->ReminderAmount = $ReminderAmount;

        return $new;
    }

    public function getReminderDate(): \DateTimeInterface
    {
        return $this->ReminderDate;
    }

    public function withReminderDate(\DateTimeInterface $ReminderDate): ReminderInfo|static
    {
        $new = clone $this;
        $new->ReminderDate = $ReminderDate;

        return $new;
    }

    public function getAcknowledgmentToken(): string
    {
        return $this->AcknowledgmentToken;
    }

    public function withAcknowledgmentToken(string $AcknowledgmentToken): ReminderInfo|static
    {
        $new = clone $this;
        $new->AcknowledgmentToken = $AcknowledgmentToken;

        return $new;
    }
}
