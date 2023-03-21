<?php

namespace Smartprax\Medidoc\XML\Nodes\Envelope;

use Ramsey\Uuid\Uuid;
use Smartprax\Medidoc\XML\XML_NS;

class MessageID extends \Smartprax\Medidoc\XML\Nodes\Node
{

    public function namespace(): ?XML_NS
    {
        return XML_NS::addressing;
    }

    public function attributes(): array
    {
        return [];
    }

    public function value(): string|array
    {
        return 'urn:uuid:' . Uuid::uuid4();
    }
}
