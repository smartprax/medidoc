<?php

namespace Smartprax\Medidoc\XML\Nodes;

use Sabre\Xml\Writer;
use Smartprax\Medidoc\XML\XML_NS;

class Body extends NodeBase
{

    public function xmlSerialize(Writer $writer): void
    {
        $writer->write([
            'name' => XML_NS::envelope->node('Body'),
            'value' => $this->method
        ]);
    }
}
