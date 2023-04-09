<?php

namespace Smartprax\Medidoc\Entities;

class SuvaInvoiceStatusInfoResponseFurtherInformation
{
    private string $TypeCode;

    private string $Code;

    private string $DescriptionDE;

    private string $DescriptionFR;

    private string $DescriptionIT;

    public function getTypeCode(): string
    {
        return $this->TypeCode;
    }

    public function withTypeCode(string $TypeCode): SuvaInvoiceStatusInfoResponseFurtherInformation|static
    {
        $new = clone $this;
        $new->TypeCode = $TypeCode;

        return $new;
    }

    public function getCode(): string
    {
        return $this->Code;
    }

    public function withCode(string $Code): SuvaInvoiceStatusInfoResponseFurtherInformation|static
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    public function getDescriptionDE(): string
    {
        return $this->DescriptionDE;
    }

    public function withDescriptionDE(string $DescriptionDE): SuvaInvoiceStatusInfoResponseFurtherInformation|static
    {
        $new = clone $this;
        $new->DescriptionDE = $DescriptionDE;

        return $new;
    }

    public function getDescriptionFR(): string
    {
        return $this->DescriptionFR;
    }

    public function withDescriptionFR(string $DescriptionFR): SuvaInvoiceStatusInfoResponseFurtherInformation|static
    {
        $new = clone $this;
        $new->DescriptionFR = $DescriptionFR;

        return $new;
    }

    public function getDescriptionIT(): string
    {
        return $this->DescriptionIT;
    }

    public function withDescriptionIT(string $DescriptionIT): SuvaInvoiceStatusInfoResponseFurtherInformation|static
    {
        $new = clone $this;
        $new->DescriptionIT = $DescriptionIT;

        return $new;
    }
}
