<?php

namespace Smartprax\Medidoc\XML\Nodes\Envelope\Security\Signature\SignedInfo\Reference;

use Smartprax\Medidoc\Methods\Method;
use Smartprax\Medidoc\XML\Nodes\Envelope\Security\Timestamp;

class DigestValue extends \Smartprax\Medidoc\XML\Nodes\Node
{

    public function __construct(protected Method $method) {}

    public function value(): string|array
    {
       return base64_encode(sha1(Timestamp::create($this->method)->xml(), true));
    }
}
