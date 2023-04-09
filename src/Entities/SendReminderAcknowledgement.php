<?php

namespace Smartprax\Medidoc\Entities;

class SendReminderAcknowledgement extends MedidocRequest
{
    public function __construct(public string $token)
    {}
}
