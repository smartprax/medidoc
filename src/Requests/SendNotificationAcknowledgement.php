<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\SendNotificationAcknowledgementResponse;

class SendNotificationAcknowledgement extends MedidocRequest
{
    public function handle(string $token) : SendNotificationAcknowledgementResponse
    {
        return Medidoc::call($this, \compact('token'));
    }
}
