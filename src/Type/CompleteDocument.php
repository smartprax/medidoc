<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CompleteDocument implements RequestInterface
{

    public function __construct(
        private string $gln,
        private string $password,
        private string $medidocDocumentGID,
        private \DateTimeInterface $completeDate
    ) {
    }

    public function getGln(): string
    {
        return $this->gln;
    }

    public function withGln(string $gln): CompleteDocument|static
    {
        $new = clone $this;
        $new->gln = $gln;

        return $new;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function withPassword(string $password): CompleteDocument|static
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }

    public function getMedidocDocumentGID(): string
    {
        return $this->medidocDocumentGID;
    }

    public function withMedidocDocumentGID(string $medidocDocumentGID): CompleteDocument|static
    {
        $new = clone $this;
        $new->medidocDocumentGID = $medidocDocumentGID;

        return $new;
    }

    public function getCompleteDate(): \DateTimeInterface
    {
        return $this->completeDate;
    }

    public function withCompleteDate(\DateTimeInterface $completeDate): CompleteDocument|static
    {
        $new = clone $this;
        $new->completeDate = $completeDate;

        return $new;
    }

}
