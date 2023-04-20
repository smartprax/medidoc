<?php

namespace Smartprax\Medidoc\Entities;

class ArrayOfDocumentData
{
    /** @var DocumentData[] */
    public function __construct(public readonly array $DocumentData)
    {
    }
}
