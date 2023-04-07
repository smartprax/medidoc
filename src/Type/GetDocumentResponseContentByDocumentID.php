<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetDocumentResponseContentByDocumentID implements RequestInterface
{
    public function __construct(
        private string $gln,
        private string $password,
        private string $documentID,
        private bool $contentAsPdf
    ) {
    }

    public function getGln(): string
    {
        return $this->gln;
    }

    public function withGln(string $gln): GetDocumentResponseContentByDocumentID|static
    {
        $new = clone $this;
        $new->gln = $gln;

        return $new;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function withPassword(string $password): GetDocumentResponseContentByDocumentID|static
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }

    public function getDocumentID(): string
    {
        return $this->documentID;
    }

    public function withDocumentID(string $documentID): GetDocumentResponseContentByDocumentID|static
    {
        $new = clone $this;
        $new->documentID = $documentID;

        return $new;
    }

    public function getContentAsPdf(): bool
    {
        return $this->contentAsPdf;
    }

    public function withContentAsPdf(bool $contentAsPdf): GetDocumentResponseContentByDocumentID|static
    {
        $new = clone $this;
        $new->contentAsPdf = $contentAsPdf;

        return $new;
    }
}
