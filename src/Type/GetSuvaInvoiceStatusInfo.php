<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetSuvaInvoiceStatusInfo implements RequestInterface
{
    public function __construct(
        private string $ean,
        private string $password,
        private int $requestType,
        private string $glnZsr,
        private float $invoiceAmount,
        private string $invoiceNumber,
        private \DateTimeInterface $invoiceDate,
        private \DateTimeInterface $firstTreatmentDate
    ) {
    }

    public function getEan(): string
    {
        return $this->ean;
    }

    public function withEan(string $ean): GetSuvaInvoiceStatusInfo|static
    {
        $new = clone $this;
        $new->ean = $ean;

        return $new;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function withPassword(string $password): GetSuvaInvoiceStatusInfo|static
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }

    public function getRequestType(): int
    {
        return $this->requestType;
    }

    public function withRequestType(int $requestType): GetSuvaInvoiceStatusInfo|static
    {
        $new = clone $this;
        $new->requestType = $requestType;

        return $new;
    }

    public function getGlnZsr(): string
    {
        return $this->glnZsr;
    }

    public function withGlnZsr(string $glnZsr): GetSuvaInvoiceStatusInfo|static
    {
        $new = clone $this;
        $new->glnZsr = $glnZsr;

        return $new;
    }

    public function getInvoiceAmount(): float
    {
        return $this->invoiceAmount;
    }

    public function withInvoiceAmount(float $invoiceAmount): GetSuvaInvoiceStatusInfo|static
    {
        $new = clone $this;
        $new->invoiceAmount = $invoiceAmount;

        return $new;
    }

    public function getInvoiceNumber(): string
    {
        return $this->invoiceNumber;
    }

    public function withInvoiceNumber(string $invoiceNumber): GetSuvaInvoiceStatusInfo|static
    {
        $new = clone $this;
        $new->invoiceNumber = $invoiceNumber;

        return $new;
    }

    public function getInvoiceDate(): \DateTimeInterface
    {
        return $this->invoiceDate;
    }

    public function withInvoiceDate(\DateTimeInterface $invoiceDate): GetSuvaInvoiceStatusInfo|static
    {
        $new = clone $this;
        $new->invoiceDate = $invoiceDate;

        return $new;
    }

    public function getFirstTreatmentDate(): \DateTimeInterface
    {
        return $this->firstTreatmentDate;
    }

    public function withFirstTreatmentDate(\DateTimeInterface $firstTreatmentDate): GetSuvaInvoiceStatusInfo|static
    {
        $new = clone $this;
        $new->firstTreatmentDate = $firstTreatmentDate;

        return $new;
    }
}
