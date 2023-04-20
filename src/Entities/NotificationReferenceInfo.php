<?php

declare(strict_types=1);

namespace Smartprax\Medidoc\Entities;

use Carbon\CarbonImmutable;

class NotificationReferenceInfo
{
    public function __construct(
        public readonly int $Timestamp,
        public readonly CarbonImmutable $Date,
        public readonly string $Id,
    ) {
    }
}
