<?php

namespace Smartprax\Medidoc\Responses;

use Smartprax\Medidoc\Entities\ArrayOfReminderInfo;

class RemindersResponse extends GenericResponse
{
    public function __construct(public ArrayOfReminderInfo $Reminders)
    {}
}
