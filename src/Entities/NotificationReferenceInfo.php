<?php

namespace Smartprax\Medidoc\Entities;

class NotificationReferenceInfo
{
    public function __construct(
        public int $Timestamp,
        public \DateTimeInterface $Date,
        public string $Id,
    ) {
    }
}
