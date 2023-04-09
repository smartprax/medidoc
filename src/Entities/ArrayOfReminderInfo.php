<?php

namespace Smartprax\Medidoc\Entities;

class ArrayOfReminderInfo
{
    /** @var ReminderInfo[] $ReminderInfo */
    public function __construct(public array $ReminderInfo)
    {}
}
