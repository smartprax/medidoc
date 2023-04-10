<?php

namespace Smartprax\Medidoc\Entities;

class NotificationInfo
{
    public function __construct(
        public string $FolderGID,
        public string $DocumentGID,
        public string $SenderGln,
        public NotificationReferenceInfo $NotificationReference,
        public NotificationReferenceInfo $CreditReference,
        public NotificationReferenceInfo $InvoiceReference,
        public NotificationReferenceInfo $ReminderReference,
        public NotificationReferenceInfo $McdReference,
        public NotificationReferenceInfo $FormReference,
        public string $AcknowledgmentToken,
    )
    {
    }
}
