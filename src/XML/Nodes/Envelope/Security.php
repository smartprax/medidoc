<?php

namespace Smartprax\Medidoc\XML\Nodes\Envelope;

use Smartprax\Medidoc\XML\Nodes\Envelope\Security\SecurityContextToken;
use Smartprax\Medidoc\XML\Nodes\Envelope\Security\Timestamp;
use Smartprax\Medidoc\XML\Nodes\Node;
use Smartprax\Medidoc\XML\XML_NS;

class Security extends Node
{

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
            $this->method->loggedIn() ? new SecurityContextToken($this->method) : new UsernameToken,
        ];
    }
}
