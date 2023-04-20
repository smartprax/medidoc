<?php

declare(strict_types=1);

namespace Smartprax\Medidoc\Entities;

use Carbon\CarbonImmutable;
use Smartprax\Medidoc\Enums\DocumentStatusEnum;

class DocumentStatus
{
    public function __construct(
        public readonly CarbonImmutable $StatusChangeDate,
        public readonly DocumentStatusEnum $DocumentWorkflowStatus,
        public readonly string $AdditionalInformation,
    ) {
    }
}
