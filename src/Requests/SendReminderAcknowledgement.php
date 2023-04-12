<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\SendReminderAcknowledgementResponse;

class SendReminderAcknowledgement extends MedidocRequest
{
    public function handle(string $token) : SendReminderAcknowledgementResponse
    {
        return Medidoc::call($this, \compact('token'));
    }
}
