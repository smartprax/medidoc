<?php

namespace Smartprax\Medidoc\Entities;

class DocumentData
{
    public function __construct(
        public string $SenderGln,
        public string $Password,
        public string $InvoiceID,
        public string $ReceiverGln,
        public PatientData $ReceiverPatient,
        public string $Language,
        public string $ContentFormat,
        public string $FileContent,
        public ArrayOfNameValue $OptionalParameters,
    )
    {
    }
}
