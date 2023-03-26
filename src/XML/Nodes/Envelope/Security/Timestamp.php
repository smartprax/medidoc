<?php

namespace Smartprax\Medidoc\XML\Nodes\Envelope\Security;

use Smartprax\Medidoc\XML\Nodes\Node;
use Smartprax\Medidoc\XML\XML_NS;

class Timestamp extends Node
{

    public function namespace(): ?XML_NS
    {
        return XML_NS::wss_utility;
    }

    public function attributes(): array
    {
        return [
            XML_NS::wss_utility->attribute('Id') => '_0',
        ];
    }

    public function value(): string|array
    {
        return [
            [
                'name' => XML_NS::wss_utility->node('Created'),
                'value' => $this->created(),
            ],

            [
                'name' => XML_NS::wss_utility->node('Expires'),
                'value' => $this->method->timestamp()->addSeconds(50)->toIso8601ZuluString(),
            ]

        ];
    }

    public function created() : string
    {
        return $this->method->timestamp()->subSeconds(50)->toIso8601ZuluString();
    }
}
