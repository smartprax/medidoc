<?php

namespace Smartprax\Medidoc\Entities;

class SuvaInvoiceStatusInfoResponse
{
    private int $ReturnStatus;

    private string $ReturnMessage;

    private string $InvoiceNumber;

    private string $InvoiceDate;

    private string $FullStatus;

    private string $AdditionalInformation;

    private string $DescriptionDE;

    private string $DescriptionFR;

    private string $DescriptionIT;

    private ArrayOfSuvaInvoiceStatusInfoResponseFurtherInformation $FurtherInformationList;

    public function getReturnStatus(): int
    {
        return $this->ReturnStatus;
    }

    public function withReturnStatus(int $ReturnStatus): SuvaInvoiceStatusInfoResponse|static
    {
        $new = clone $this;
        $new->ReturnStatus = $ReturnStatus;

        return $new;
    }

    public function getReturnMessage(): string
    {
        return $this->ReturnMessage;
    }

    public function withReturnMessage(string $ReturnMessage): SuvaInvoiceStatusInfoResponse|static
    {
        $new = clone $this;
        $new->ReturnMessage = $ReturnMessage;

        return $new;
    }

    public function getInvoiceNumber(): string
    {
        return $this->InvoiceNumber;
    }

    public function withInvoiceNumber(string $InvoiceNumber): SuvaInvoiceStatusInfoResponse|static
    {
        $new = clone $this;
        $new->InvoiceNumber = $InvoiceNumber;

        return $new;
    }

    public function getInvoiceDate(): string
    {
        return $this->InvoiceDate;
    }

    public function withInvoiceDate(string $InvoiceDate): SuvaInvoiceStatusInfoResponse|static
    {
        $new = clone $this;
        $new->InvoiceDate = $InvoiceDate;

        return $new;
    }

    public function getFullStatus(): string
    {
        return $this->FullStatus;
    }

    public function withFullStatus(string $FullStatus): SuvaInvoiceStatusInfoResponse|static
    {
        $new = clone $this;
        $new->FullStatus = $FullStatus;

        return $new;
    }

    public function getAdditionalInformation(): string
    {
        return $this->AdditionalInformation;
    }

    public function withAdditionalInformation(string $AdditionalInformation): SuvaInvoiceStatusInfoResponse|static
    {
        $new = clone $this;
        $new->AdditionalInformation = $AdditionalInformation;

        return $new;
    }

    public function getDescriptionDE(): string
    {
        return $this->DescriptionDE;
    }

    public function withDescriptionDE(string $DescriptionDE): SuvaInvoiceStatusInfoResponse|static
    {
        $new = clone $this;
        $new->DescriptionDE = $DescriptionDE;

        return $new;
    }

    public function getDescriptionFR(): string
    {
        return $this->DescriptionFR;
    }

    public function withDescriptionFR(string $DescriptionFR): SuvaInvoiceStatusInfoResponse|static
    {
        $new = clone $this;
        $new->DescriptionFR = $DescriptionFR;

        return $new;
    }

    public function getDescriptionIT(): string
    {
        return $this->DescriptionIT;
    }

    public function withDescriptionIT(string $DescriptionIT): SuvaInvoiceStatusInfoResponse|static
    {
        $new = clone $this;
        $new->DescriptionIT = $DescriptionIT;

        return $new;
    }

    public function getFurtherInformationList(): ArrayOfSuvaInvoiceStatusInfoResponseFurtherInformation
    {
        return $this->FurtherInformationList;
    }

    public function withFurtherInformationList(
        ArrayOfSuvaInvoiceStatusInfoResponseFurtherInformation $FurtherInformationList
    ): SuvaInvoiceStatusInfoResponse|static {
        $new = clone $this;
        $new->FurtherInformationList = $FurtherInformationList;

        return $new;
    }
}
