<?php

namespace Smartprax\Medidoc\Entities;

use Smartprax\Medidoc\Responses\SendDocumentResponse;

class ArrayOfSendDocumentResponse
{
    /** @var SendDocumentResponse[] */
    public function __construct(public array $SendDocumentResponse)
    {
    }
}
