<?php

namespace Smartprax\Medidoc\XML\Nodes\Envelope;

use Smartprax\Medidoc\XML\Nodes\Node;
use Smartprax\Medidoc\XML\XML_NS;

class ReplyTo extends Node
{

    public function namespace(): ?XML_NS
    {
        return  XML_NS::addressing;
    }

    public function attributes(): array
    {
        return [];
    }

    public function value(): string|array
    {
        return [
            'name' => XML_NS::addressing->node('Address'),
            'value' => 'http://www.w3.org/2005/08/addressing/anonymous'
        ];
    }
}
