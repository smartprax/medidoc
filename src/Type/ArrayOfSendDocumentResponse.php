<?php

namespace Smartprax\Medidoc\Type;

class ArrayOfSendDocumentResponse
{
    /** @var SendDocumentResponse[] $SendDocumentResponse */
    public function __construct(public array $SendDocumentResponse)
    {}
}
