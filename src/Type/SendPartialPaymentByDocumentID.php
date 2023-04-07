<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SendPartialPaymentByDocumentID implements RequestInterface
{
    public function __construct(
        private string $gln,
        private string $password,
        private string $documentID,
        private float $amount,
        private \DateTimeInterface $paymentDate
    ) {
    }

    public function getGln(): string
    {
        return $this->gln;
    }

    public function withGln(string $gln): SendPartialPaymentByDocumentID|static
    {
        $new = clone $this;
        $new->gln = $gln;

        return $new;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function withPassword(string $password): SendPartialPaymentByDocumentID|static
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }

    public function getDocumentID(): string
    {
        return $this->documentID;
    }

    public function withDocumentID(string $documentID): SendPartialPaymentByDocumentID|static
    {
        $new = clone $this;
        $new->documentID = $documentID;

        return $new;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function withAmount(float $amount): SendPartialPaymentByDocumentID|static
    {
        $new = clone $this;
        $new->amount = $amount;

        return $new;
    }

    public function getPaymentDate(): \DateTimeInterface
    {
        return $this->paymentDate;
    }

    public function withPaymentDate(\DateTimeInterface $paymentDate): SendPartialPaymentByDocumentID|static
    {
        $new = clone $this;
        $new->paymentDate = $paymentDate;

        return $new;
    }
}
