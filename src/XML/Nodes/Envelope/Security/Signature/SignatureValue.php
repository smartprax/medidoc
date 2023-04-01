<?php

namespace Smartprax\Medidoc\XML\Nodes\Envelope\Security\Signature;

use Smartprax\Medidoc\Methods\Login;
use Smartprax\Medidoc\XML\Nodes\Node;
use Smartprax\Medidoc\XML\XML_NS;

class SignatureValue extends Node
{

    public function __construct(protected Login $login, protected SignedInfo $signedInfo) {}

    public static function namespace(): ?XML_NS
    {
        return null;
    }

    public function attributes(): array
    {
        return [];
    }

    public function value(): string|array
    {
        $signed_info   = $this->signedInfo->xml(); // checked.
        $client_secret = $this->login->clientSecret(); // checked.
        $binary_secret = $this->login->binarySecret();

        //$signed_info = '<SignedInfo xmlns="http://www.w3.org/2000/09/xmldsig#"><CanonicalizationMethod Algorithm="http://www.w3.org/2001/10/xml-exc-c14n#"></CanonicalizationMethod><SignatureMethod Algorithm="http://www.w3.org/2000/09/xmldsig#hmac-sha1"></SignatureMethod><Reference URI="#_0"><Transforms><Transform Algorithm="http://www.w3.org/2001/10/xml-exc-c14n#"></Transform></Transforms><DigestMethod Algorithm="http://www.w3.org/2000/09/xmldsig#sha1"></DigestMethod><DigestValue>A/IMXF7+3wLzotqI/a2uQQs5Pk0=</DigestValue></Reference></SignedInfo>';
        //$client_secret = 'oXbz6G05K29efuAGDEDpj4yOMcU=';
        //$binary_secret = ' 6NLbwiNS96UcdK9exi8b/2+kBRLafsX8WcQHF1Zh16Y=';

        //ray('Signed info:' . $signed_info, 'Client secret: '. $client_secret, 'Server Binary Secret: ' . $binary_secret);

        $psha_1_secret = static::psha1(\base64_decode($client_secret), \base64_decode($binary_secret));
        $sha_1_hmac = hash_hmac("sha1", $signed_info, $psha_1_secret, true);

        //ray('Signature Value:' . base64_encode($sha_1_hmac));

        return base64_encode($sha_1_hmac);
    }

    private static function psha1($clientSecret, $serverSecret) : string
    {
        $sizeBytes = 256 / 8;

        $hmacKey = $clientSecret;
        $i = 0;

        $b1 = $serverSecret;
        $psha = [];

        while ($i < $sizeBytes) {

            $b1 = hash_hmac('SHA1', $b1, $hmacKey, true);
            $b2 = $b1 . $serverSecret;
            $temp = hash_hmac('SHA1', $b2, $hmacKey, true);

            for ($j = 0; $j < strlen($temp); $j++) {
                if ($i < $sizeBytes) {
                    $psha[$i] = $temp[$j];
                    $i++;
                } else {
                    break;
                }
            }
        }

        return implode("", $psha);
    }
}
