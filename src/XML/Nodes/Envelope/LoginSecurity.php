<?php

namespace Smartprax\Medidoc\XML\Nodes\Envelope;

use Smartprax\Medidoc\Methods\Method;
use Smartprax\Medidoc\XML\Nodes\Envelope\Security\Timestamp;
use Smartprax\Medidoc\XML\Nodes\Envelope\Security\UsernameToken;
use Smartprax\Medidoc\XML\Nodes\Node;
use Smartprax\Medidoc\XML\XML_NS;

class LoginSecurity extends Node
{

    public function __construct(protected Method $method) {}

    protected ?string $name = 'Security';

    public function namespace(): ?XML_NS
    {
        return XML_NS::wss_secext;
    }

    public function attributes(): array
    {
        return [
            XML_NS::envelope->attribute('mustUnderstand') => '1'
        ];
    }

    public function value(): array
    {
        return [
            new Timestamp($this->method),
            new UsernameToken(),
        ];
    }
}
