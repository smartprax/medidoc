<?php

namespace Smartprax\Medidoc\Methods;

use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\GetPendingNotificationsResponse;

class GetPendingNotifications extends MedidocMethod
{
    public function handle() : GetPendingNotificationsResponse
    {
        return Medidoc::call($this, []);
    }
}
