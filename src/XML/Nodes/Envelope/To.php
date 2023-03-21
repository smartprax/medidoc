<?php

namespace Smartprax\Medidoc\XML\Nodes\Envelope;

use Smartprax\Medidoc\XML\Nodes\Node;
use Smartprax\Medidoc\XML\XML_NS;

class To extends Node
{

    public function namespace(): ?XML_NS
    {
        return XML_NS::addressing;
    }

    public function attributes(): array
    {
        return [
            XML_NS::envelope->attribute('mustUnderstand') => '1'
        ];
    }

    public function value(): string
    {
        return 'https://test.medidoc.ch/WebServices/MedidocAccessV3.svc';
    }
}
