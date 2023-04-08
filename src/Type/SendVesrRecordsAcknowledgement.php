<?php

namespace Smartprax\Medidoc\Type;

class SendVesrRecordsAcknowledgement extends MedidocRequest
{
    public function __construct(public string $token)
    {}
}
