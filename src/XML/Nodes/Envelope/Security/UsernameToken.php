<?php

namespace Smartprax\Medidoc\XML\Nodes\Envelope\Security;

use Smartprax\Medidoc\XML\Nodes\Node;
use Smartprax\Medidoc\XML\XML_NS;

class UsernameToken extends Node
{

    public static function namespace(): ?XML_NS
    {
        return XML_NS::o;
    }

    public function attributes(): array
    {
        return [
            //XML_NS::u->attribute('Id') => 'uuid-' . Uuid::uuid4() . '-1',

            //TODO: make dynamic.
            XML_NS::u->alias('Id') => 'uuid-2fa2b88a-3cc3-4c4b-a98d-9a7baa7ec71c-1'
        ];
    }

    public function value(): string|array
    {

        return [

            [
                'name' => XML_NS::o->clark('Username'),
                'value' => \config('medidoc.gln'),
            ],

            [
                'name' => XML_NS::o->clark('Password'),
                'attributes' => [
                    'Type' => 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-username-token-profile-1.0#PasswordText'
                ],
                'value' => \config('medidoc.encryption_key'),
            ]
        ];
    }
}
