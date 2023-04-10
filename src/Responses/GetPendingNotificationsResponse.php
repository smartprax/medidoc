<?php

namespace Smartprax\Medidoc\Responses;

class GetPendingNotificationsResponse extends GenericResponse
{
    public function __construct(public NotificationsResponse $GetPendingNotificationsResult)
    {
    }
}
