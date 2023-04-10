<?php

namespace Smartprax\Medidoc\Entities;

class ReminderInfo
{
    public function __construct(
        public string $FolderGID,
        public string $DocumentGID,
        public string $InvoiceID,
        public int $ReminderLevel,
        public float $ReminderAmount,
        public \DateTimeInterface $ReminderDate,
        public string $AcknowledgmentToken,
    )
    {}
}
