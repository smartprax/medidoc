<?php

namespace Smartprax\Medidoc\Entities;

class ArrayOfDocumentStatus
{
    public function __construct(public SendDocumentResponse $DocumentStatus)
    {}
}
