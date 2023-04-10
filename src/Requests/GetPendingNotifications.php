<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Responses\GetPendingNotificationsResponse;

class GetPendingNotifications extends MedidocRequest
{
    public function handle() : GetPendingNotificationsResponse
    {
        return $this->call([]);
    }
}
