<?php

namespace Smartprax\Medidoc\Entities;

class ArrayOfNameValue
{
    /** @var NameValue[] $NameValue */
    public function __construct(public array $NameValue)
    {}
}
