<?php

namespace Smartprax\Medidoc\Entities;

class DocumentStatus
{
    public function __construct(
        public string $StatusChangeDate,
        public int $DocumentWorkflowStatus,
        public string $AdditionalInformation,
    )
    {
    }
}
