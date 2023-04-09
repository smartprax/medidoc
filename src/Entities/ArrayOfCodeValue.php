<?php

namespace Smartprax\Medidoc\Entities;

class ArrayOfCodeValue
{
    /** @var CodeValue[] $CodeValue */
    public function __construct(public array $CodeValue)
    {}
}
