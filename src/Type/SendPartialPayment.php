<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SendPartialPayment implements RequestInterface
{
    public function __construct(
        private string $gln,
        private string $password,
        private string $medidocDocumentGID,
        private float $amount,
        private \DateTimeInterface $paymentDate
    ) {
    }

    public function getGln(): string
    {
        return $this->gln;
    }

    public function withGln(string $gln): SendPartialPayment|static
    {
        $new = clone $this;
        $new->gln = $gln;

        return $new;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function withPassword(string $password): SendPartialPayment|static
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }

    public function getMedidocDocumentGID(): string
    {
        return $this->medidocDocumentGID;
    }

    public function withMedidocDocumentGID(string $medidocDocumentGID): SendPartialPayment|static
    {
        $new = clone $this;
        $new->medidocDocumentGID = $medidocDocumentGID;

        return $new;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function withAmount(float $amount): SendPartialPayment|static
    {
        $new = clone $this;
        $new->amount = $amount;

        return $new;
    }

    public function getPaymentDate(): \DateTimeInterface
    {
        return $this->paymentDate;
    }

    public function withPaymentDate(\DateTimeInterface $paymentDate): SendPartialPayment|static
    {
        $new = clone $this;
        $new->paymentDate = $paymentDate;

        return $new;
    }
}
