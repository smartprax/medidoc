<?php

namespace Smartprax\Medidoc\Type;

class ArrayOfDocumentStatesResponse
{
    /** @var DocumentStatesResponse[] $DocumentStatesResponse */
    public function __construct(public array $DocumentStatesResponse)
    {}
}
