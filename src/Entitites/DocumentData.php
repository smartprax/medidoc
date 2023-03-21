<?php

namespace Smartprax\Medidoc\Entitites;

use Smartprax\Medidoc\Elements\MessageStream;
use Smartprax\Medidoc\Enumerations\ContentFormatEnum;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\Validation\In;
use Spatie\LaravelData\Attributes\Validation\Size;
use Spatie\LaravelData\DataCollection;

class DocumentData
{
    public function __construct(

        #[Size(13)]
        public string $senderGln,

        public string $Password,

        public ContentFormatEnum $ContentFormat,

        #[DataCollectionOf(NameValue::class)]
        public ?DataCollection $OptionalParameters,

        #[Size(13)]
        public ?string $ReceiverGln,

        public ?string $InvoiceID,

        public ?PatientData $PatientData,

        public ?MessageStream $FileContent,

        #[In(['de', 'it', 'en', 'fr'])]
        public ?string $Language = 'de',
    )
    {}


}
