<?php

namespace Smartprax\Medidoc\XML\Nodes;

use Ramsey\Uuid\Uuid;
use Smartprax\Medidoc\Methods\AbstractMethod;
use Smartprax\Medidoc\XML\Nodes\Envelope\Action;
use Smartprax\Medidoc\XML\Nodes\Envelope\MessageID;
use Smartprax\Medidoc\XML\Nodes\Envelope\ReplyTo;
use Smartprax\Medidoc\XML\Nodes\Envelope\Security;
use Smartprax\Medidoc\XML\Nodes\Envelope\To;
use Smartprax\Medidoc\XML\XML_NS;

class Envelope extends Node
{
    public function __construct(
        protected AbstractMethod $method
    ) {}


    public function namespace(): ?XML_NS
    {
        return XML_NS::envelope;
    }

    public function attributes(): array
    {
        return [];
    }

    public function value(): array
    {
        return [
            new Action($this->method),
            new MessageID(),
            new ReplyTo(),
            new To(),
            new Security()
        ];
    }
}
