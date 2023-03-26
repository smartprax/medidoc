<?php

namespace Smartprax\Medidoc\XML;

use Sabre\Xml\Writer;
use Smartprax\Medidoc\XML\Nodes\Body;
use Smartprax\Medidoc\XML\Nodes\Header;

class MedidocXML
{

    protected Writer $writer;

    public function __construct()
    {
        $this->writer = New Writer();
        $this->writer->openMemory();
        $this->writer->setIndent(true);
        $this->writer->startDocument('1.0', 'UTF-8');

        foreach (XML_NS::cases() as $namespace) {
            $this->writer->namespaceMap[$namespace->value] = $namespace->name;
        }

    }

    public static function write(Header $header, Body $body) : self
    {
        $instance = new self();

        $instance->writer->writeElement(XML_NS::envelope->clark('Envelope'), [
            $header,
            $body,
        ]);

        return $instance;
    }


    public function prettyPrint() : string
    {
        $dom = new \DOMDocument('1.0');
        $dom->preserveWhiteSpace = true;
        $dom->formatOutput = true;
        $dom->loadXML($this->writer->outputMemory());

        return $dom->saveXML();
    }

    public function __toString(): string
    {
        return $this->writer->outputMemory();
    }

}
