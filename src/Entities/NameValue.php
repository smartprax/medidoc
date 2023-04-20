<?php

declare(strict_types=1);

namespace Smartprax\Medidoc\Entities;

class NameValue
{
    public function __construct(public readonly string $Name, public readonly string $Value)
    {
    }
}
