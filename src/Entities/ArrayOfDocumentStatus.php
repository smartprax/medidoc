<?php

namespace Smartprax\Medidoc\Entities;

class ArrayOfDocumentStatus
{
    /** @var DocumentStatus[] $DocumentStatus */
    public function __construct(public array $DocumentStatus)
    {}
}
