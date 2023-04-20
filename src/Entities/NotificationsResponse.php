<?php

declare(strict_types=1);

namespace Smartprax\Medidoc\Entities;

use Illuminate\Support\Collection;

class NotificationsResponse
{
    public function __construct(

        /** @var NotificationInfo[] */
        public readonly Collection $Notifications
    ) {
    }
}
