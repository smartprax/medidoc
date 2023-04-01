<?php

namespace Smartprax\Medidoc\XML\Nodes\Envelope\Security;

use Smartprax\Medidoc\Methods\Login;
use Smartprax\Medidoc\Methods\Method;
use Smartprax\Medidoc\XML\XML_NS;

class SecurityContextToken extends \Smartprax\Medidoc\XML\Nodes\Node
{

    public function __construct(private readonly Method $method, private readonly Login $login) {}

    public static function namespace(): ?XML_NS
    {
        return XML_NS::c;
    }

    public function attributes(): array
    {
        return [
            XML_NS::u->alias('Id') => 'uuid' . $this->method->uuid(),
        ];
    }

    public function value(): string|array
    {
        return [
            [
                'name' => XML_NS::c->clark('Identifier'),
                'value' => $this->login->identifier(),
            ]
        ];
    }
}
