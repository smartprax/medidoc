<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetDocumentStatesHistoryByDocumentID implements RequestInterface
{
    public function __construct(private string $gln, private string $password, private string $documentID)
    {
    }

    public function getGln(): string
    {
        return $this->gln;
    }

    public function withGln(string $gln): GetDocumentStatesHistoryByDocumentID|static
    {
        $new = clone $this;
        $new->gln = $gln;

        return $new;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function withPassword(string $password): GetDocumentStatesHistoryByDocumentID|static
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }

    public function getDocumentID(): string
    {
        return $this->documentID;
    }

    public function withDocumentID(string $documentID): GetDocumentStatesHistoryByDocumentID|static
    {
        $new = clone $this;
        $new->documentID = $documentID;

        return $new;
    }
}
