<?php

namespace Smartprax\Medidoc\Methods;

use Sabre\Xml\Writer;
use Smartprax\Medidoc\XML\Nodes\Node;

class CheckConnection extends Method
{

    public function xmlSerialize(Writer $writer): void
    {
        $writer->write(
            Node::create(
                name: 'CheckConnection',
                attributes: [
                    'xmlns' => "http://tempuri.org/"
                ],
                value: [
                    Node::create(name: 'gln', value: \config('medidoc.gln')),
                    Node::create(name: 'password', value: \config('medidoc.password'))
                ]
            )
        );
    }


    public function process(\SimpleXMLElement $body): void
    {
        echo 'OK.';
    }
}
