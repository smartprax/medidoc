<?php

namespace Smartprax\Medidoc\Methods;

use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\GetPendingRemindersResponse;

class GetPendingReminders extends MedidocMethod
{
    public function handle() : GetPendingRemindersResponse
    {
        return Medidoc::call($this, []);
    }
}
