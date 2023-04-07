<?php

namespace Smartprax\Medidoc\Type;

class ArrayOfCodeValue
{
    /** @var CodeValue[] $CodeValue */
    public function __construct(public array $CodeValue)
    {}
}
