<?php

namespace Smartprax\Medidoc\Entities;

class CodeValue
{
    public function __construct(public int $Code, public string $Value)
    {
    }
}
