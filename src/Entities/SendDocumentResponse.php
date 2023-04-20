<?php

declare(strict_types=1);

namespace Smartprax\Medidoc\Entities;

use Carbon\CarbonImmutable;
use Smartprax\Medidoc\Enums\DocumentStatusEnum;

class SendDocumentResponse
{
    public function __construct(
        public readonly string $FolderGID,
        public readonly string $DocumentGID,
        public readonly int $DocumentID,
        public readonly DocumentStatusEnum $DocumentWorkflowStatus,
        public readonly CarbonImmutable $UploadDateTime,
    ) {
    }
}
