<?php

namespace Smartprax\Medidoc\XML;

enum XML_NS : string
{
    case envelope = 'http://www.w3.org/2003/05/soap-envelope';
    case addressing = 'http://www.w3.org/2005/08/addressing';
    case wss_utility = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd';
    case wss_secext = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd';
    case sc = 'http://schemas.xmlsoap.org/ws/2005/02/sc';


    public function node(string $name): string
    {
        return '{' . $this->value . '}' . $name;
    }

    public function attribute(string $name): string
    {
        return $this->name . ':' . $name;
    }

}