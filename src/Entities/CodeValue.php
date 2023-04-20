<?php

declare(strict_types=1);

namespace Smartprax\Medidoc\Entities;

class CodeValue
{
    public function __construct(public readonly int $Code, public readonly string $Value)
    {
    }
}
