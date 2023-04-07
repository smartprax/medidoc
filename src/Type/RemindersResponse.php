<?php

namespace Smartprax\Medidoc\Type;

class RemindersResponse
{
    private int $ReturnStatus;

    private string $ReturnMessage;

    private ArrayOfReminderInfo $Reminders;

    public function getReturnStatus(): int
    {
        return $this->ReturnStatus;
    }

    public function withReturnStatus(int $ReturnStatus): RemindersResponse|static
    {
        $new = clone $this;
        $new->ReturnStatus = $ReturnStatus;

        return $new;
    }

    public function getReturnMessage(): string
    {
        return $this->ReturnMessage;
    }

    public function withReturnMessage(string $ReturnMessage): RemindersResponse|static
    {
        $new = clone $this;
        $new->ReturnMessage = $ReturnMessage;

        return $new;
    }

    public function getReminders(): ArrayOfReminderInfo
    {
        return $this->Reminders;
    }

    public function withReminders(ArrayOfReminderInfo $Reminders): RemindersResponse|static
    {
        $new = clone $this;
        $new->Reminders = $Reminders;

        return $new;
    }
}
