<?php

namespace Smartprax\Medidoc\XML\Nodes\Envelope\Security;

use Smartprax\Medidoc\XML\Nodes\Node;
use Smartprax\Medidoc\XML\XML_NS;

class UsernameToken extends Node
{

    public function name(): string
    {
        return 'Security';
    }

    public function namespace(): ?XML_NS
    {
        return XML_NS::wss_secext;
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
                'name' => XML_NS::wss_secext->clark('Username'),
                'value' => \config('medidoc.gln'),
            ],

            [
                'name' => XML_NS::wss_secext->clark('Password'),
                'attributes' => [
                    'Type' => 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-username-token-profile-1.0#PasswordText'
                ],
                'value' => \config('medidoc.encryption_key'),
            ]
        ];
    }
}
