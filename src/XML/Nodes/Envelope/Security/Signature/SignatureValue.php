<?php

namespace Smartprax\Medidoc\XML\Nodes\Envelope\Security\Signature;

use Sabre\Xml\Writer;
use Smartprax\Medidoc\XML\Nodes\Envelope\Security\Timestamp;
use Smartprax\Medidoc\XML\Nodes\Node;
use Smartprax\Medidoc\XML\XML_NS;

class SignatureValue extends Node
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
        $timestamp = new SignedInfo($this->method);

        $writer->write([
            'name' => $timestamp->name(),
            'attributes' => [
                ...$timestamp->attributes(),
                'xmlns' => 'http://www.w3.org/2000/09/xmldsig#',
            ],
            'value' => $timestamp->value(),
        ]);

        $timestamp_xml = $writer->outputMemory();

        $client_secret = base64_encode(
            pack('H*',
                sha1(
                    pack('H*', \mt_rand()) .
                    pack('a*', (new Timestamp($this->method))->created()) .
                    pack('a*', \config('medidoc.encryption_key')))
            )
        );

        $binServerSecret= base64_decode($serverSecret);
        $psha1Secret    = self::psha1($client_secret, $binServerSecret);
        $signatuHmac    = hash_hmac("sha1", $timestamp_xml, $psha1Secret, true);

        return base64_encode($signatuHmac);
    }
}
