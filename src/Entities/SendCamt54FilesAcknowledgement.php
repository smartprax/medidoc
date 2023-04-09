<?php

namespace Smartprax\Medidoc\Entities;

class SendCamt54FilesAcknowledgement extends MedidocRequest
{
    public function __construct(public string $token)
    {}
}
