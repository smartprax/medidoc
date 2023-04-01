<?php

namespace Smartprax\Medidoc\XML\Nodes\Envelope\Security;

use Smartprax\Medidoc\Methods\Method;
use Smartprax\Medidoc\XML\Nodes\Node;
use Smartprax\Medidoc\XML\XML_NS;

class Timestamp extends Node
{

    public function __construct(private readonly Method $method) {}

    public static function namespace(): ?XML_NS
    {
        return XML_NS::u;
    }

    public function attributes(): array
    {
        return [
            XML_NS::u->alias('Id') => '_0',
        ];
    }

    public function value(): string|array
    {
        return [
            [
                'name' => XML_NS::u->clark('Created'),
                'value' => $this->created(),
            ],

            [
                'name' => XML_NS::u->clark('Expires'),
                'value' => $this->method->timestamp()->addSeconds(250)->toIso8601ZuluString(),
            ]

        ];
    }

    public function created() : string
    {
        return $this->method->timestamp()->subSeconds(50)->toIso8601ZuluString();
    }
}
