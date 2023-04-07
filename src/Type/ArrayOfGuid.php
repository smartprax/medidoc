<?php

namespace Smartprax\Medidoc\Type;

class ArrayOfGuid
{
    private string $guid;

    public function getGuid(): string
    {
        return $this->guid;
    }

    public function withGuid(string $guid): ArrayOfGuid|static
    {
        $new = clone $this;
        $new->guid = $guid;

        return $new;
    }
}
