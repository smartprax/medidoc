<?php

namespace Smartprax\Medidoc\Type;

class SendNotificationAcknowledgement extends MedidocRequest
{
    public function __construct(public string $token)
    {}
}
