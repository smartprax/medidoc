<?php

namespace Smartprax\Medidoc\Type;

class ArrayOfNotificationInfo
{
    /** @var NotificationInfo[] $NotificationInfo */
    public function __construct(public array $NotificationInfo)
    {}
}
