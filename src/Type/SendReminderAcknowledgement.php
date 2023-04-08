<?php

namespace Smartprax\Medidoc\Type;

class SendReminderAcknowledgement extends MedidocRequest
{
    public function __construct(public string $token)
    {}
}
