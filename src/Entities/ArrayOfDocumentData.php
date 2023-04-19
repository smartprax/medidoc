<?php

namespace Smartprax\Medidoc\Entities;

class ArrayOfDocumentData
{
    /** @var DocumentData[] */
    public function __construct(public array $DocumentData)
    {
    }
}
