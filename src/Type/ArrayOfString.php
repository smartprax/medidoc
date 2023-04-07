<?php

namespace Smartprax\Medidoc\Type;

class ArrayOfString
{
    /** @var string[] $string */
    public function __construct(public array $string)
    {}
}
