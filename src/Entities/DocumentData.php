<?php

namespace Smartprax\Medidoc\Entities;

class DocumentData
{
    public string $SenderGln;
    public string $Password;

    public function __construct(
        public string $FileContent,

        public ?string $ReceiverGln = null,
        public ?string $InvoiceID = null,
        public ?PatientData $ReceiverPatient = null,
        public ?ArrayOfNameValue $OptionalParameters = null,

        public string $ContentFormat = 'XmlInvoiceV450',
        public string $Language = 'de',
    )
    {
        $this->SenderGln = \config('medidoc.gln');
        $this->Password = \config('medidoc.password');

        $this->FileContent = \base64_encode($this->FileContent);
    }
}
