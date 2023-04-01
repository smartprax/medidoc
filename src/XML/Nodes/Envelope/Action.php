<?php

namespace Smartprax\Medidoc\XML\Nodes\Envelope;

use Smartprax\Medidoc\Methods\Method;
use Smartprax\Medidoc\XML\XML_NS;

class Action extends \Smartprax\Medidoc\XML\Nodes\Node
{

    public function __construct(private readonly Method $method) {}

    public static function namespace(): ?XML_NS
    {
        return XML_NS::a;
    }

    public function attributes(): array
    {
        return [
            XML_NS::s->alias('mustUnderstand') => '1',
        ];
    }

    public function value(): array|string|null
    {
        return 'http://tempuri.org/IMedidoc/' . $this->method->name();
    }

}
