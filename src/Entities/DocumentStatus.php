<?php

namespace Smartprax\Medidoc\Entities;

use Carbon\Carbon;
use Smartprax\Medidoc\Enums\DocumentStatusEnum;

class DocumentStatus
{
    public function __construct(
        public readonly Carbon $StatusChangeDate,
        public readonly DocumentStatusEnum $DocumentWorkflowStatus,
        public readonly string $AdditionalInformation,
    ) {
    }
}
