<?php

namespace Smartprax\Medidoc\Type;

class SendCamt54FilesAcknowledgement extends MedidocRequest
{
    public function __construct(public string $token)
    {}
}
