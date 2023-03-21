<?php

namespace Smartprax\Medidoc\XML\Nodes\Envelope;

use Ramsey\Uuid\Uuid;
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

            // <u:Timestamp u:Id="_0">
            //                <u:Created>2023-03-21T08:35:52Z</u:Created>
            //                <u:Expires>2023-03-21T08:40:52Z</u:Expires>
            //            </u:Timestamp>

            [
                'name' => XML_NS::wss_utility->node('Timestamp'),
                'attributes' => [
                    XML_NS::wss_utility->attribute('Id') => '_0',
                ],
                'value' => [
                    [
                        'name' => XML_NS::wss_utility->node('Created'),
                        'value' => \now()->subSeconds(50)->toIso8601String(),
                    ],

                    [
                        'name' => XML_NS::wss_utility->node('Expires'),
                        'value' => \now()->addSeconds(50)->toIso8601String(),
                    ]

                ]
            ],

            // <c:SecurityContextToken xmlns:c="http://schemas.xmlsoap.org/ws/2005/02/sc"
            //                                    u:Id="uuid-126619d5-b159-4b44-bbdf-ed5e8a618d57-1491">
            //                <c:Identifier>urn:uuid:64ef4932-5c3f-4acd-bf81-183ebab4bef3</c:Identifier>
            //            </c:SecurityContextToken>

            [
                'name' => XML_NS::sc->node('SecurityContextToken'),
                'attributes' => [
                    XML_NS::wss_utility->attribute('Id') => 'uuid' . Uuid::uuid4(),
                ],
                'value' => [
                    [
                        'name' => XML_NS::sc->node('Identifier'),
                        'value' => 'urn:uuid:' . Uuid::uuid4(),
                    ],

                ]
            ],
        ];
    }
}
