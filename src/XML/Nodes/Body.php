<?php

namespace Smartprax\Medidoc\XML\Nodes;

use Sabre\Xml\Writer;
use Smartprax\Medidoc\Methods\Method;
use Smartprax\Medidoc\XML\XML_NS;

class Body extends Node
{
    public function __construct(protected Method $method)
    {}

    public static function namespace(): ?XML_NS
    {
        return XML_NS::s;
    }

    public function xmlSerialize(Writer $writer): void
    {
        $writer->write([
            'name' => $this->namespace()->clark('Body'),
            'value' => $this->method,
        ]);
    }
}
