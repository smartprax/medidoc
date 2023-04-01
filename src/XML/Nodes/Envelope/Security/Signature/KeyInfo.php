<?php

namespace Smartprax\Medidoc\XML\Nodes\Envelope\Security\Signature;

use Smartprax\Medidoc\Methods\Method;
use Smartprax\Medidoc\XML\Nodes\Node;
use Smartprax\Medidoc\XML\XML_NS;

class KeyInfo extends Node
{

    public function __construct(protected Method $method) {}

    public static function namespace(): ?XML_NS
    {
        return null;
    }

    public function attributes(): array
    {
        return [];
    }

    public function value(): string|array
    {
        return [
            [
                'name' => XML_NS::o->clark('SecurityTokenReference'),
                'value' => [
                    [
                        'name' => XML_NS::o->clark('Reference'),
                        'attributes' => [
                            'ValueTupe' => 'http://schemas.xmlsoap.org/ws/2005/02/sc/sct',
                            'URI' => '#uuid-' . $this->method->uuid(),
                        ],
                    ],
                ]
            ],
        ];
    }
}
