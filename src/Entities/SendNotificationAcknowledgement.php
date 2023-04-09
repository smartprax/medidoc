<?php

namespace Smartprax\Medidoc\Entities;

class SendNotificationAcknowledgement extends MedidocRequest
{
    public function __construct(public string $token)
    {}
}
