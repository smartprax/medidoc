<?php

declare(strict_types=1);

namespace Smartprax\Medidoc\Entities;

use Illuminate\Support\Collection;

class DocumentListResponse
{
    public function __construct(

        /** @var SendDocumentResponse[] */
        public readonly Collection $AddressList
    ) {
    }
}
