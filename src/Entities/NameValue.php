<?php

namespace Smartprax\Medidoc\Entities;

class NameValue
{
    public function __construct(public string $Name, public string $Value)
    {
    }
}
