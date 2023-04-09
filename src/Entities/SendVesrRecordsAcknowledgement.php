<?php

namespace Smartprax\Medidoc\Entities;

class SendVesrRecordsAcknowledgement extends MedidocRequest
{
    public function __construct(public string $token)
    {}
}
