<?php

namespace Smartprax\Medidoc\Type;

class SendDocumentStatesAcknowledgement extends MedidocRequest
{
    public function __construct(public string $token)
    {}
}
