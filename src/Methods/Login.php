<?php

namespace Smartprax\Medidoc\Methods;

use Ramsey\Uuid\Uuid;
use Sabre\Xml\Writer;
use Smartprax\Medidoc\XML\Nodes\Envelope\Security\Timestamp;
use Smartprax\Medidoc\XML\Nodes\Node;
use Smartprax\Medidoc\XML\XML_NS;

class Login extends Method
{

    protected string $client_secret;
    protected string $binary_secret;
    protected string $security_context_token;
    protected string $identifier;

    public function __construct()
    {
        $this->client_secret = \base64_encode(
            pack(
                'H*',
                sha1
                (
                    // TODO: use mt_rand() instead of 1
                    pack('H*', 1) .
                    pack('a*', Timestamp::create($this)->created()) .
                    pack('a*', \config('medidoc.encryption_key'))
                )
            )
        );
    }

    public function xmlSerialize(Writer $writer): void
    {
        $writer->write(
            Node::create(
                name: XML_NS::t->clark('RequestSecurityToken'),
                value: [
                    Node::create(
                        name: XML_NS::t->clark('TokenType'),
                        value: 'http://schemas.xmlsoap.org/ws/2005/02/sc/sct'),
                    Node::create(name: XML_NS::t->clark('RequestType'), value: 'http://schemas.xmlsoap.org/ws/2005/02/trust/Issue'),
                    Node::create(name: XML_NS::t->clark('Entropy'),  value: [
                        Node::create(
                            name: XML_NS::t->clark('BinarySecret'),
                            attributes: [
                                XML_NS::u->alias('id') => 'uuid-' . Uuid::uuid4() . '-1',
                                'Type' => 'http://schemas.xmlsoap.org/ws/2005/02/trust/Nonce',
                            ],
                            value: $this->client_secret)
                    ]),
                    Node::create(name: XML_NS::t->clark('KeySize'), value: '256'),
                ]
            )
        );
    }

    public function process(\SimpleXMLElement $body) : void
    {
        $this->binary_secret = $body->xpath('//' . XML_NS::t->alias('BinarySecret'))[0];
        $this->security_context_token = $body->xpath('//' . XML_NS::c->alias('SecurityContextToken') . '/@' . XML_NS::u->alias('Id'))[0];
        $this->identifier = $body->xpath('//' . XML_NS::c->alias('Identifier'))[0];
    }

    public function clientSecret(): string
    {
        return $this->client_secret;
    }

    public function binarySecret(): string
    {
        return $this->binary_secret;
    }

    public function securityContextToken(): string
    {
        return $this->security_context_token;
    }

    public function identifier(): string
    {
        return $this->identifier;
    }

}
