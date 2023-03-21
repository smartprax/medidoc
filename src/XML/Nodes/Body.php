<?php

namespace Smartprax\Medidoc\XML\Nodes;

use Smartprax\Medidoc\XML\XML_NS;

class Body extends Node
{
    public function namespace(): ?XML_NS
    {
        return XML_NS::envelope;
    }

    public function attributes(): array
    {
        return [];
    }

    public function value(): array
    {
        return [];
    }
}
