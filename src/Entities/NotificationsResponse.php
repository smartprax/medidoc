<?php

namespace Smartprax\Medidoc\Entities;

class NotificationsResponse
{
    private int $ReturnStatus;

    private string $ReturnMessage;

    private ArrayOfNotificationInfo $Notifications;

    public function getReturnStatus(): int
    {
        return $this->ReturnStatus;
    }

    public function withReturnStatus(int $ReturnStatus): NotificationsResponse|static
    {
        $new = clone $this;
        $new->ReturnStatus = $ReturnStatus;

        return $new;
    }

    public function getReturnMessage(): string
    {
        return $this->ReturnMessage;
    }

    public function withReturnMessage(string $ReturnMessage): NotificationsResponse|static
    {
        $new = clone $this;
        $new->ReturnMessage = $ReturnMessage;

        return $new;
    }

    public function getNotifications(): ArrayOfNotificationInfo
    {
        return $this->Notifications;
    }

    public function withNotifications(ArrayOfNotificationInfo $Notifications): NotificationsResponse|static
    {
        $new = clone $this;
        $new->Notifications = $Notifications;

        return $new;
    }
}
