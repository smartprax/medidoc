<?php

namespace Smartprax\Medidoc\Entities;

class DocumentStatus
{
    public function __construct(
        public \DateTimeInterface $StatusChangeDate,
        public int $DocumentWorkflowStatus,
        public string $AdditionalInformation,
    )
    {
    }
}
