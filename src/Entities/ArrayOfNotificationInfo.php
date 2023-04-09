<?php

namespace Smartprax\Medidoc\Entities;

class ArrayOfNotificationInfo
{
    /** @var NotificationInfo[] $NotificationInfo */
    public function __construct(public array $NotificationInfo)
    {}
}
