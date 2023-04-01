<?php

namespace Smartprax\Medidoc\XML\Nodes\Envelope\Security;

use Ramsey\Uuid\Uuid;
use Smartprax\Medidoc\Methods\Method;
use Smartprax\Medidoc\XML\XML_NS;

class SecurityContextToken extends \Smartprax\Medidoc\XML\Nodes\Node
{

    public function __construct(protected Method $method) {}

    public function namespace(): ?XML_NS
    {
        return XML_NS::sc;
    }

    public function attributes(): array
    {
        return [
            XML_NS::wss_utility->attribute('Id') => 'uuid' . $this->method->uuid(),
        ];
    }

    public function value(): string|array
    {
        return [
            [
                'name' => XML_NS::sc->clark('Identifier'),
                'value' => 'urn:uuid:' . Uuid::uuid4(),
            ]
        ];
    }
}