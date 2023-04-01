<?php

namespace Smartprax\Medidoc\XML\Nodes\Envelope;

use Smartprax\Medidoc\XML\XML_NS;

class LoginAction extends \Smartprax\Medidoc\XML\Nodes\Node
{

    protected ?string $name = 'Action';

    public function __construct() {}

    public static function namespace(): ?XML_NS
    {
        return XML_NS::a;
    }

    public function attributes(): array
    {
        return [
            XML_NS::s->alias('mustUnderstand') => '1',
        ];
    }

    public function value(): array|string|null
    {
        return 'http://schemas.xmlsoap.org/ws/2005/02/trust/RST/SCT';
    }

}
