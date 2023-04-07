<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ConvertXmlToPdf implements RequestInterface
{
    public function __construct(
        private string $gln,
        private string $password,
        private string $xmlContent,
        private string $contentFormat,
        private bool $isPatientCopy
    ) {
    }

    public function getGln(): string
    {
        return $this->gln;
    }

    public function withGln(string $gln): ConvertXmlToPdf|static
    {
        $new = clone $this;
        $new->gln = $gln;

        return $new;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function withPassword(string $password): ConvertXmlToPdf|static
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }

    public function getXmlContent(): string
    {
        return $this->xmlContent;
    }

    public function withXmlContent(string $xmlContent): ConvertXmlToPdf|static
    {
        $new = clone $this;
        $new->xmlContent = $xmlContent;

        return $new;
    }

    public function getContentFormat(): string
    {
        return $this->contentFormat;
    }

    public function withContentFormat(string $contentFormat): ConvertXmlToPdf|static
    {
        $new = clone $this;
        $new->contentFormat = $contentFormat;

        return $new;
    }

    public function getIsPatientCopy(): bool
    {
        return $this->isPatientCopy;
    }

    public function withIsPatientCopy(bool $isPatientCopy): ConvertXmlToPdf|static
    {
        $new = clone $this;
        $new->isPatientCopy = $isPatientCopy;

        return $new;
    }
}
