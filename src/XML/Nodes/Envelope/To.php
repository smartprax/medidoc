<?php

namespace Smartprax\Medidoc\XML\Nodes\Envelope;

use Smartprax\Medidoc\XML\Nodes\Node;
use Smartprax\Medidoc\XML\XML_NS;

class To extends Node
{

    public static function namespace(): ?XML_NS
    {
        return XML_NS::a;
    }

    public function attributes(): array
    {
        return [
            XML_NS::s->alias('mustUnderstand') => '1'
        ];
    }

    public function value(): string
    {
        return 'https://test.medidoc.ch/WebServices/MedidocAccessV3.svc';
    }
}
