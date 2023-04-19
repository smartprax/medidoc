<?php

namespace Smartprax\Medidoc\Entities;

class ArrayOfNotificationInfo
{
    /** @var NotificationInfo[] */
    public function __construct(public array $NotificationInfo)
    {
    }
}
