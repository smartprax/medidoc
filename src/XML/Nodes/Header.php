<?php

namespace Smartprax\Medidoc\XML\Nodes;

use Smartprax\Medidoc\XML\XML_NS;

class Header extends Node
{
    public function namespace(): ?XML_NS
    {
        return XML_NS::envelope;
    }

}