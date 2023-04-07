<?php

namespace Smartprax\Medidoc\Type;

class DocumentData
{
    private string $SenderGln;

    private string $Password;

    private string $InvoiceID;

    private string $ReceiverGln;

    private PatientData $ReceiverPatient;

    private string $Language;

    private string $ContentFormat;

    private string $FileContent;

    private ArrayOfNameValue $OptionalParameters;

    public function getSenderGln(): string
    {
        return $this->SenderGln;
    }

    public function withSenderGln(string $SenderGln): DocumentData|static
    {
        $new = clone $this;
        $new->SenderGln = $SenderGln;

        return $new;
    }

    public function getPassword(): string
    {
        return $this->Password;
    }

    public function withPassword(string $Password): DocumentData|static
    {
        $new = clone $this;
        $new->Password = $Password;

        return $new;
    }

    public function getInvoiceID(): string
    {
        return $this->InvoiceID;
    }

    public function withInvoiceID(string $InvoiceID): DocumentData|static
    {
        $new = clone $this;
        $new->InvoiceID = $InvoiceID;

        return $new;
    }

    public function getReceiverGln(): string
    {
        return $this->ReceiverGln;
    }

    public function withReceiverGln(string $ReceiverGln): DocumentData|static
    {
        $new = clone $this;
        $new->ReceiverGln = $ReceiverGln;

        return $new;
    }

    public function getReceiverPatient(): PatientData
    {
        return $this->ReceiverPatient;
    }

    public function withReceiverPatient(PatientData $ReceiverPatient): DocumentData|static
    {
        $new = clone $this;
        $new->ReceiverPatient = $ReceiverPatient;

        return $new;
    }

    public function getLanguage(): string
    {
        return $this->Language;
    }

    public function withLanguage(string $Language): DocumentData|static
    {
        $new = clone $this;
        $new->Language = $Language;

        return $new;
    }

    public function getContentFormat(): string
    {
        return $this->ContentFormat;
    }

    public function withContentFormat(string $ContentFormat): DocumentData|static
    {
        $new = clone $this;
        $new->ContentFormat = $ContentFormat;

        return $new;
    }

    public function getFileContent(): string
    {
        return $this->FileContent;
    }

    public function withFileContent(string $FileContent): DocumentData|static
    {
        $new = clone $this;
        $new->FileContent = $FileContent;

        return $new;
    }

    public function getOptionalParameters(): ArrayOfNameValue
    {
        return $this->OptionalParameters;
    }

    public function withOptionalParameters(ArrayOfNameValue $OptionalParameters): DocumentData|static
    {
        $new = clone $this;
        $new->OptionalParameters = $OptionalParameters;

        return $new;
    }
}
