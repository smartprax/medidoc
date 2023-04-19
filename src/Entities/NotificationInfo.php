<?php

namespace Smartprax\Medidoc\Entities;

class NotificationInfo
{
    public function __construct(
        public readonly string $FolderGID,
        public readonly string $DocumentGID,
        public readonly string $SenderGln,
        public readonly NotificationReferenceInfo $NotificationReference,
        public readonly NotificationReferenceInfo $CreditReference,
        public readonly NotificationReferenceInfo $InvoiceReference,
        public readonly NotificationReferenceInfo $ReminderReference,
        public readonly NotificationReferenceInfo $McdReference,
        public readonly NotificationReferenceInfo $FormReference,
        public readonly string $AcknowledgmentToken,
    ) {
    }
}
