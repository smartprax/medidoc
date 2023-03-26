<?php

namespace Smartprax\Medidoc\XML\Nodes\Envelope;

use Smartprax\Medidoc\Methods\Method;
use Smartprax\Medidoc\XML\XML_NS;

class Action extends \Smartprax\Medidoc\XML\Nodes\Node
{

    public function namespace(): ?XML_NS
    {
        return XML_NS::addressing;
    }

    public function attributes(): array
    {
        return [
            XML_NS::envelope->attribute('mustUnderstand') => '1',
        ];
    }

    public function value(): string|array
    {
        return 'http://tempuri.org/IMedidoc/' . $this->method->name();
    }
}
