<?php

namespace Smartprax\Medidoc\Entities;

class ArrayOfReminderInfo
{
    /** @var ReminderInfo[] */
    public function __construct(public array $ReminderInfo)
    {
    }
}
