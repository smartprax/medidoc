<?php

namespace Smartprax\Medidoc\Entitites;

use Smartprax\Medidoc\Enumerations\DocumentStatusEnum;
use Smartprax\Medidoc\Enumerations\ReturnStatusEnum;
use Spatie\LaravelData\Attributes\Validation\Max;
use Spatie\LaravelData\Attributes\Validation\Size;
use Spatie\LaravelData\Data;

class SendDocumentResponse extends Data
{

    public function __construct(

        public ?ReturnStatusEnum $ReturnStatus,

        public ?DocumentStatusEnum $DocumentStatus,

        #[Max(200)]
        public ?string $ReturnMessage,

        #[Size(36)]
        public ?string $FolderGID,

        #[Size(36)]
        public ?string $DocumentGID,
    ) {}

}
