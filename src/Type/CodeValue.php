<?php

namespace Smartprax\Medidoc\Type;

class CodeValue
{
    private int $Code;

    private string $Value;

    public function getCode(): int
    {
        return $this->Code;
    }

    public function withCode(int $Code): CodeValue|static
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    public function getValue(): string
    {
        return $this->Value;
    }

    public function withValue(string $Value): CodeValue|static
    {
        $new = clone $this;
        $new->Value = $Value;

        return $new;
    }
}
