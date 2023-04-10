<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Responses\GetPendingRemindersResponse;

class GetPendingReminders extends MedidocRequest
{
    public function handle() : GetPendingRemindersResponse
    {
        return $this->call([]);
    }
}
