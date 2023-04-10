<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Responses\SendReminderAcknowledgementResponse;

class SendReminderAcknowledgement extends MedidocRequest
{
    public function handle(string $token) : SendReminderAcknowledgementResponse
    {
        return $this->call(\compact('token'));
    }
}
