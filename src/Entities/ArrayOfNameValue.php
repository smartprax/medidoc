<?php

namespace Smartprax\Medidoc\Entities;

class ArrayOfNameValue
{
    /** @var NameValue[] */
    public function __construct(public readonly array $NameValue)
    {
    }
}
