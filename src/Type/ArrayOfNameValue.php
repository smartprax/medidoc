<?php

namespace Smartprax\Medidoc\Type;

class ArrayOfNameValue
{
    /** @var NameValue[] $NameValue */
    public function __construct(public array $NameValue)
    {}
}
