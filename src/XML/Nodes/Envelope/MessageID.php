<?php

namespace Smartprax\Medidoc\XML\Nodes\Envelope;

use Smartprax\Medidoc\Methods\Method;
use Smartprax\Medidoc\XML\XML_NS;

class MessageID extends \Smartprax\Medidoc\XML\Nodes\Node
{

    public function __construct(private readonly Method $method)
    {}

    public static function namespace(): ?XML_NS
    {
        return XML_NS::a;
    }

    public function value(): string|array
    {
        return $this->method->messageId();
    }
}
