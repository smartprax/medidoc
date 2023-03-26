<?php

namespace Smartprax\Medidoc\XML\Nodes\Envelope\Security\Signature;

use Smartprax\Medidoc\Methods\Method;
use Smartprax\Medidoc\XML\Nodes\Envelope\Security\Signature\SignedInfo\Reference;
use Smartprax\Medidoc\XML\XML_NS;

class SignedInfo extends \Smartprax\Medidoc\XML\Nodes\Node
{

    public function __construct(protected Method $method) {}

    public function namespace(): ?XML_NS
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
                'name' => 'CanonicalizationMethod',
                'attributes' => [
                    'Algorithm' => 'http://www.w3.org/2001/10/xml-exc-c14n#',
                ],
            ],

            [
                'name' => 'SignatureMethod',
                'attributes' => [
                    'Algorithm' => 'http://www.w3.org/2000/09/xmldsig#hmac-sha1',
                ],
            ],

            new Reference($this->method),
        ];
    }
}
