<?php

namespace Smartprax\Medidoc\Methods;

use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\SendReminderAcknowledgementResponse;

class SendReminderAcknowledgement extends MedidocMethod
{
    public function handle(string $token): SendReminderAcknowledgementResponse
    {
        return Medidoc::call($this, \compact('token'));
    }
}
