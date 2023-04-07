<?php

namespace Smartprax\Medidoc\Type;

class ArrayOfDocumentData
{
    /** @var DocumentData[] $DocumentData */
    public function __construct(public array $DocumentData)
    {}
}
