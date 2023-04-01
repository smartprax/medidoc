<?php

namespace Smartprax\Medidoc\XML;

use Sabre\Xml\Reader;
use Sabre\Xml\Writer;
use Smartprax\Medidoc\XML\Nodes\Body;
use Smartprax\Medidoc\XML\Nodes\Header;

class MedidocXML
{

    protected Writer $writer;
    protected \SimpleXMLElement $reader;

    public static function writer() : Writer
    {
        $instance = new self();

        $instance->writer = New Writer();
        $instance->writer->openMemory();

        return $instance->writer;
    }

    public static function write(Header $header, Body $body) : Writer
    {
        $writer = static::writer();

        foreach (XML_NS::cases() as $namespace) {
            $writer->namespaceMap[$namespace->value] = $namespace->name;
        }

        $writer->setIndent(true);
        $writer->startDocument('1.0', 'UTF-8');

        $writer->writeElement(XML_NS::s->clark('Envelope'), [
            $header,
            $body,
        ]);

        return $writer;
    }

    /**
     * @throws \Exception
     */
    public static function read(\Illuminate\Http\Client\Response $response) : \SimpleXMLElement
    {

        // Get body.
        $xml = new \SimpleXMLElement($response->body());
        $body = $xml->xpath('//'. XML_NS::s->alias('Body'))[0] ?? null;

        if (! \is_a($body, \SimpleXMLElement::class)) {
            throw new \Exception('Body element not found.');
        }

        // Register namespaces.
        foreach (XML_NS::cases() as $namespace) {
            $body->registerXPathNamespace($namespace->name, $namespace->value);
        }

        // Check for faults.
        if (count($body->xpath('//' . XML_NS::s->alias('Fault')))) {
            throw new \Exception($body->xpath('//' . XML_NS::s->alias('Reason') . '/' . XML_NS::s->alias('Text'))[0]);
        }

        return $body;
    }

    public function string(): string
    {
        return $this->writer->outputMemory();
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
