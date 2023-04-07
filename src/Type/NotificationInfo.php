<?php

namespace Smartprax\Medidoc\Type;

class NotificationInfo
{
    private string $FolderGID;

    private string $DocumentGID;

    private string $SenderGln;

    private NotificationReferenceInfo $NotificationReference;

    private NotificationReferenceInfo $CreditReference;

    private NotificationReferenceInfo $InvoiceReference;

    private NotificationReferenceInfo $ReminderReference;

    private NotificationReferenceInfo $McdReference;

    private NotificationReferenceInfo $FormReference;

    private string $AcknowledgmentToken;

    public function getFolderGID(): string
    {
        return $this->FolderGID;
    }

    public function withFolderGID(string $FolderGID): NotificationInfo|static
    {
        $new = clone $this;
        $new->FolderGID = $FolderGID;

        return $new;
    }

    public function getDocumentGID(): string
    {
        return $this->DocumentGID;
    }

    public function withDocumentGID(string $DocumentGID): NotificationInfo|static
    {
        $new = clone $this;
        $new->DocumentGID = $DocumentGID;

        return $new;
    }

    public function getSenderGln(): string
    {
        return $this->SenderGln;
    }

    public function withSenderGln(string $SenderGln): NotificationInfo|static
    {
        $new = clone $this;
        $new->SenderGln = $SenderGln;

        return $new;
    }

    public function getNotificationReference(): NotificationReferenceInfo
    {
        return $this->NotificationReference;
    }

    public function withNotificationReference(NotificationReferenceInfo $NotificationReference): NotificationInfo|static
    {
        $new = clone $this;
        $new->NotificationReference = $NotificationReference;

        return $new;
    }

    public function getCreditReference(): NotificationReferenceInfo
    {
        return $this->CreditReference;
    }

    public function withCreditReference(NotificationReferenceInfo $CreditReference): NotificationInfo|static
    {
        $new = clone $this;
        $new->CreditReference = $CreditReference;

        return $new;
    }

    public function getInvoiceReference(): NotificationReferenceInfo
    {
        return $this->InvoiceReference;
    }

    public function withInvoiceReference(NotificationReferenceInfo $InvoiceReference): NotificationInfo|static
    {
        $new = clone $this;
        $new->InvoiceReference = $InvoiceReference;

        return $new;
    }

    public function getReminderReference(): NotificationReferenceInfo
    {
        return $this->ReminderReference;
    }

    public function withReminderReference(NotificationReferenceInfo $ReminderReference): NotificationInfo|static
    {
        $new = clone $this;
        $new->ReminderReference = $ReminderReference;

        return $new;
    }

    public function getMcdReference(): NotificationReferenceInfo
    {
        return $this->McdReference;
    }

    public function withMcdReference(NotificationReferenceInfo $McdReference): NotificationInfo|static
    {
        $new = clone $this;
        $new->McdReference = $McdReference;

        return $new;
    }

    public function getFormReference(): NotificationReferenceInfo
    {
        return $this->FormReference;
    }

    public function withFormReference(NotificationReferenceInfo $FormReference): NotificationInfo|static
    {
        $new = clone $this;
        $new->FormReference = $FormReference;

        return $new;
    }

    public function getAcknowledgmentToken(): string
    {
        return $this->AcknowledgmentToken;
    }

    public function withAcknowledgmentToken(string $AcknowledgmentToken): NotificationInfo|static
    {
        $new = clone $this;
        $new->AcknowledgmentToken = $AcknowledgmentToken;

        return $new;
    }
}
