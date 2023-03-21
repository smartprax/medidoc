<?php

namespace Smartprax\Medidoc\XML\Nodes;

use Illuminate\Support\Str;
use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;
use Smartprax\Medidoc\Methods\AbstractMethod;
use Smartprax\Medidoc\XML\XML_NS;

abstract class Node implements XmlSerializable
{
    abstract public function namespace() : ?XML_NS;
    abstract public function attributes() : array;
    abstract public function value() : string|array;

    public function name() : string
    {
        return Str::of(get_class($this))
            ->replace('\\', '/')
            ->basename();
    }

    public function xmlSerialize(Writer $writer): void
    {
        $writer->write([
            'name' => $this->namespace() ? $this->namespace()->node($this->name()) : $this->name(),
            'attributes' => $this->attributes(),
            'value' => $this->value(),
        ]);
    }

}
