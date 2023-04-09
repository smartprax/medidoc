<?php

namespace Smartprax\Medidoc\Entities;

class ArrayOfSendDocumentResponse
{
    /** @var SendDocumentResponse[] $SendDocumentResponse */
    public function __construct(public array $SendDocumentResponse)
    {}
}
