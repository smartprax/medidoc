<?php

namespace Smartprax\Medidoc\XML\Nodes;

use Sabre\Xml\XmlSerializable;
use Smartprax\Medidoc\Methods\AbstractMethod;

abstract class NodeBase implements XmlSerializable
{
    public function __construct(
        protected AbstractMethod $method
    ) {}
}
