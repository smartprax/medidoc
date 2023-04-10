<?php

namespace Smartprax\Medidoc\Responses;

use Smartprax\Medidoc\Entities\ArrayOfNotificationInfo;

class NotificationsResponse extends GenericResponse
{
    public function __construct(public ArrayOfNotificationInfo $Notifications)
    {}
}
