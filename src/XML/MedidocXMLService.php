<?php

namespace Smartprax\Medidoc\XML;

use Sabre\Xml\Writer;
use Smartprax\Medidoc\Methods\Method;
use Smartprax\Medidoc\XML\Nodes\Body;
use Smartprax\Medidoc\XML\Nodes\Envelope;

class MedidocXMLService extends Writer
{

    public function __construct()
    {
        $this->openMemory();
        $this->setIndent(true);
        $this->startDocument('1.0', 'UTF-8');

        $this->initNamespacesMap();
    }

    private function initNamespacesMap()
    {
        foreach (XML_NS::cases() as $namespace) {
            $this->namespaceMap[$namespace->value] = $namespace->name;
        }
    }

    public static function make(Method $method) : self
    {
        $instance = new self();

        $instance->writeElement(XML_NS::envelope->node('Envelope'), [
            new Envelope($method),
            new Body($method),
        ]);

        return $instance;
    }


    public function prettyPrint() : string
    {
        $dom = new \DOMDocument('1.0');
        $dom->preserveWhiteSpace = true;
        $dom->formatOutput = true;
        $dom->loadXML($this->outputMemory());

        return $dom->saveXML();
    }

    public function __toString(): string
    {
        return $this->outputMemory();
    }

}
