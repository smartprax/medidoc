<?php

namespace Smartprax\Medidoc\XML\Nodes;

use Sabre\Xml\Writer;
use Smartprax\Medidoc\Methods\Method;
use Smartprax\Medidoc\XML\XML_NS;

class Body extends Node
{
    public Method $method;

    public function __construct(Method $method)
    {
        $this->method = $method;
    }

    public function namespace(): ?XML_NS
    {
        return XML_NS::envelope;
    }

    public function xmlSerialize(Writer $writer): void
    {
        $this->method->xmlSerialize($writer);
    }
}
