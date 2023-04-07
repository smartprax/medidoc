<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetDocumentStatesByDocumentID implements RequestInterface
{
    public function __construct(private string $gln, private string $password, private string $documentID)
    {
    }

    public function getGln(): string
    {
        return $this->gln;
    }

    public function withGln(string $gln): GetDocumentStatesByDocumentID|static
    {
        $new = clone $this;
        $new->gln = $gln;

        return $new;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function withPassword(string $password): GetDocumentStatesByDocumentID|static
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }

    public function getDocumentID(): string
    {
        return $this->documentID;
    }

    public function withDocumentID(string $documentID): GetDocumentStatesByDocumentID|static
    {
        $new = clone $this;
        $new->documentID = $documentID;

        return $new;
    }
}
