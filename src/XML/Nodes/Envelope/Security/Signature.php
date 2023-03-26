<?php

namespace Smartprax\Medidoc\XML\Nodes\Envelope\Security;

use DOMDocument;
use Smartprax\Medidoc\XML\Nodes\Envelope\Security\Signature\SignatureValue;
use Smartprax\Medidoc\XML\Nodes\Envelope\Security\Signature\SignedInfo;
use Smartprax\Medidoc\XML\XML_NS;

class Signature extends \Smartprax\Medidoc\XML\Nodes\Node
{

    public function namespace(): ?XML_NS
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
        return [
            new SignedInfo($this->method),
            new SignatureValue($this->method)
        ];
    }
}
