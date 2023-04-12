<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\GetPendingNotificationsResponse;

class GetPendingNotifications extends MedidocRequest
{
    public function handle() : GetPendingNotificationsResponse
    {
        return Medidoc::call($this, []);
    }
}
