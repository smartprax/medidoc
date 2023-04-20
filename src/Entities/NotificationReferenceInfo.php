<?php

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
