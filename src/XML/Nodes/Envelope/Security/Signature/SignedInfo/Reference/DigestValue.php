<?php

namespace Smartprax\Medidoc\XML\Nodes\Envelope\Security\Signature\SignedInfo\Reference;

use Sabre\Xml\Writer;
use Smartprax\Medidoc\XML\Nodes\Envelope\Security\Timestamp;
use Smartprax\Medidoc\XML\XML_NS;

class DigestValue extends \Smartprax\Medidoc\XML\Nodes\Node
{

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
        $writer = new Writer();
        $timestamp = new Timestamp($this->method);

        $writer->write([
            'name' => $timestamp->name(),
            'attributes' => [
                ...$timestamp->attributes(),
                XML_NS::wss_utility->attribute('xmlns') => XML_NS::wss_utility->value,
            ],
            'value' => $timestamp->value(),
        ]);


        $str = $writer->outputMemory();

        return base64_encode(sha1($str));
    }
}
