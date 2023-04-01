<?php

namespace Smartprax\Medidoc\XML\Nodes\Envelope\Security;

use DOMDocument;
use Smartprax\Medidoc\Methods\Login;
use Smartprax\Medidoc\Methods\Method;
use Smartprax\Medidoc\XML\Nodes\Envelope\Security\Signature\KeyInfo;
use Smartprax\Medidoc\XML\Nodes\Envelope\Security\Signature\SignatureValue;
use Smartprax\Medidoc\XML\Nodes\Envelope\Security\Signature\SignedInfo;
use Smartprax\Medidoc\XML\XML_NS;

class Signature extends \Smartprax\Medidoc\XML\Nodes\Node
{

    public function __construct(protected Method $method, protected Login $login) {}

    public static function namespace(): ?XML_NS
    {
        return null;
    }

    public function attributes(): array
    {
        return [
            'xmlns' => 'http://www.w3.org/2000/09/xmldsig#',
        ];
    }

    public function value(): string|array
    {

        $signedInfo = new SignedInfo($this->method);

        return [
            $signedInfo,
            new SignatureValue($this->login, $signedInfo),
            new KeyInfo($this->method),
        ];
    }
}
