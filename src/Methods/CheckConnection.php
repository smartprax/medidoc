<?php

namespace Smartprax\Medidoc\Methods;

use Ramsey\Uuid\Uuid;
use Sabre\Xml\Writer;
use Smartprax\Medidoc\XML\Nodes\Envelope\Security\Timestamp;
use Smartprax\Medidoc\XML\Nodes\Node;
use Smartprax\Medidoc\XML\XML_NS;

class CheckConnection extends Method
{

    public function xmlSerialize(Writer $writer): void
    {
        $writer->write(
            Node::create(
                name: XML_NS::trust->clark('RequestSecurityToken'),
                value: [
                    Node::create(
                        name: XML_NS::trust->clark('TokenType'),
                        value: 'http://schemas.xmlsoap.org/ws/2005/02/sc/sct'),
                    Node::create(name: XML_NS::trust->clark('RequestType'), value: 'http://schemas.xmlsoap.org/ws/2005/02/trust/Issue'),
                    Node::create(name: XML_NS::trust->clark('Entropy'),  value: [
                        Node::create(name: XML_NS::trust->clark('BinarySecret'), attributes: [
                            XML_NS::wss_utility->attribute('id') => 'uuid-' . Uuid::uuid4() . '-1',
                            'Type' => 'http://schemas.xmlsoap.org/ws/2005/02/trust/Nonce',
                        ], value: \base64_encode(
                                pack(
                                    'H*',
                                    sha1(
                                        pack('H*', mt_rand()) .
                                        pack('a*', Timestamp::create($this)->created()) .
                                        pack('a*', \config('medidoc.encryption_key'))
                                    )
                                )
                            )
                        )
                    ]),
                ]
            )
        );
    }
}
