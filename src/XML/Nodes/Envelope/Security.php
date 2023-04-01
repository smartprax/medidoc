<?php

namespace Smartprax\Medidoc\XML\Nodes\Envelope;

use Smartprax\Medidoc\Methods\Login;
use Smartprax\Medidoc\Methods\Method;
use Smartprax\Medidoc\XML\Nodes\Envelope\Security\SecurityContextToken;
use Smartprax\Medidoc\XML\Nodes\Envelope\Security\Signature;
use Smartprax\Medidoc\XML\Nodes\Envelope\Security\Timestamp;
use Smartprax\Medidoc\XML\Nodes\Node;
use Smartprax\Medidoc\XML\XML_NS;

class Security extends Node
{

    public function __construct(protected Method $method, protected Login $login) {}

    public static function namespace(): ?XML_NS
    {
        return XML_NS::o;
    }

    public function attributes(): array
    {
        return [
            XML_NS::s->alias('mustUnderstand') => '1'
        ];
    }

    public function value(): array
    {
        return [
            new Timestamp($this->method),
            new SecurityContextToken($this->method, $this->login),
            new Signature($this->method, $this->login),
        ];
    }
}
