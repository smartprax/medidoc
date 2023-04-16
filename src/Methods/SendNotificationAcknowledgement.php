<?php

namespace Smartprax\Medidoc\Methods;

use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\SendNotificationAcknowledgementResponse;

class SendNotificationAcknowledgement extends MedidocMethod
{
    public function handle(string $token) : SendNotificationAcknowledgementResponse
    {
        return Medidoc::call($this, \compact('token'));
    }
}
