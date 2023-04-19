<?php

namespace Smartprax\Medidoc\Entities;

use Smartprax\Medidoc\Enums\ContentFormatEnum;
use Smartprax\Medidoc\Enums\LanguageEnum;

class DocumentData
{
    public string $SenderGln;

    public string $Password;
    public readonly string $ContentFormat;
    public readonly string $Language;

    public function __construct(
        public string $FileContent,

        public ?string $ReceiverGln = null,
        public ?string $InvoiceID = null,
        public ?PatientData $ReceiverPatient = null,
        public ?ArrayOfNameValue $OptionalParameters = null,

        ContentFormatEnum $ContentFormat = ContentFormatEnum::XmlInvoiceV450,
        LanguageEnum $Language = LanguageEnum::de,
    ) {
        $this->SenderGln = \config('medidoc.gln');
        $this->Password = \config('medidoc.password');

        $this->FileContent = \base64_encode($this->FileContent);
        $this->ContentFormat = $ContentFormat->name;
        $this->Language = $Language->value;
    }
}
