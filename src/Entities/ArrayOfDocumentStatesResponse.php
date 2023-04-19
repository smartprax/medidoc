<?php

namespace Smartprax\Medidoc\Entities;

use Smartprax\Medidoc\Responses\DocumentStatesResponse;

class ArrayOfDocumentStatesResponse
{
    /** @var DocumentStatesResponse[] */
    public function __construct(public array $DocumentStatesResponse)
    {
    }
}
