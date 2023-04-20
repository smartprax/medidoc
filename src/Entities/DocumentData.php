<?php

declare(strict_types=1);

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

        public readonly ?string $ReceiverGln = null,
        public readonly ?string $InvoiceID = null,
        public readonly ?PatientData $ReceiverPatient = null,
        public readonly ?ArrayOfNameValue $OptionalParameters = null,

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
