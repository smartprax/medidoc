<?php

namespace Smartprax\Medidoc\Type;

class SendDocument extends MedidocRequest
{
    public function __construct(public DocumentData $documentData)
    {}
}
