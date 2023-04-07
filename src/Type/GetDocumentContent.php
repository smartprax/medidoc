<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetDocumentContent implements RequestInterface
{
    public function __construct(
        private string $gln,
        private string $password,
        private string $medidocDocumentGID,
        private bool $contentAsPdf
    ) {
    }

    public function getGln(): string
    {
        return $this->gln;
    }

    public function withGln(string $gln): GetDocumentContent|static
    {
        $new = clone $this;
        $new->gln = $gln;

        return $new;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function withPassword(string $password): GetDocumentContent|static
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }

    public function getMedidocDocumentGID(): string
    {
        return $this->medidocDocumentGID;
    }

    public function withMedidocDocumentGID(string $medidocDocumentGID): GetDocumentContent|static
    {
        $new = clone $this;
        $new->medidocDocumentGID = $medidocDocumentGID;

        return $new;
    }

    public function getContentAsPdf(): bool
    {
        return $this->contentAsPdf;
    }

    public function withContentAsPdf(bool $contentAsPdf): GetDocumentContent|static
    {
        $new = clone $this;
        $new->contentAsPdf = $contentAsPdf;

        return $new;
    }
}
