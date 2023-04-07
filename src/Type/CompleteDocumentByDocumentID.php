<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CompleteDocumentByDocumentID implements RequestInterface
{

    public function __construct(
        private string $gln,
        private string $password,
        private string $documentID,
        private \DateTimeInterface $completeDate
    ) {
    }

    public function getGln(): string
    {
        return $this->gln;
    }

    public function withGln(string $gln): CompleteDocumentByDocumentID|static
    {
        $new = clone $this;
        $new->gln = $gln;

        return $new;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function withPassword(string $password): CompleteDocumentByDocumentID|static
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }

    public function getDocumentID(): string
    {
        return $this->documentID;
    }

    public function withDocumentID(string $documentID): CompleteDocumentByDocumentID|static
    {
        $new = clone $this;
        $new->documentID = $documentID;

        return $new;
    }

    public function getCompleteDate(): \DateTimeInterface
    {
        return $this->completeDate;
    }

    public function withCompleteDate(\DateTimeInterface $completeDate): CompleteDocumentByDocumentID|static
    {
        $new = clone $this;
        $new->completeDate = $completeDate;

        return $new;
    }
}
