<?php

namespace Smartprax\Medidoc\Entities;

class SendDocument extends MedidocRequest
{
    public function __construct(public DocumentData $documentData)
    {}
}
