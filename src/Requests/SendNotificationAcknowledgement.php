<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Responses\SendNotificationAcknowledgementResponse;

class SendNotificationAcknowledgement extends MedidocRequest
{
    public function handle(string $token) : SendNotificationAcknowledgementResponse
    {
        return $this->call(\compact('token'));
    }
}
