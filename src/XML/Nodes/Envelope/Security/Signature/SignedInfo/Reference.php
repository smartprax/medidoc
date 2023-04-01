<?php

namespace Smartprax\Medidoc\XML\Nodes\Envelope\Security\Signature\SignedInfo;

use Sabre\Xml\Writer;
use Smartprax\Medidoc\Methods\Method;
use Smartprax\Medidoc\XML\Nodes\Envelope\Security\Signature\SignedInfo\Reference\DigestValue;
use Smartprax\Medidoc\XML\Nodes\Node;
use Smartprax\Medidoc\XML\XML_NS;

class Reference extends Node
{

    public function __construct(protected Method $method) {}

    public function attributes(): array
    {
        return [
            'URI' => '#_0',
        ];
    }

    public function value(): string|array
    {
        return [
            [
                'name' => 'Transforms',
                'value' => [
                    'name' => 'Transform',
                    'attributes' => [
                        'Algorithm' => 'http://www.w3.org/2001/10/xml-exc-c14n#',
                    ]
                ]
            ],

            [
                'name' => 'DigestMethod',
                'attributes' => [
                    'Algorithm' => 'http://www.w3.org/2000/09/xmldsig#sha1',
                ]
            ],

            new DigestValue($this->method),

        ];
    }
}
