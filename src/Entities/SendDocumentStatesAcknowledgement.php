<?php

namespace Smartprax\Medidoc\Entities;

class SendDocumentStatesAcknowledgement extends MedidocRequest
{
    public function __construct(public string $token)
    {}
}
