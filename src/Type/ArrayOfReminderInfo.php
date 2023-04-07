<?php

namespace Smartprax\Medidoc\Type;

class ArrayOfReminderInfo
{
    /** @var ReminderInfo[] $ReminderInfo */
    public function __construct(public array $ReminderInfo)
    {}
}
