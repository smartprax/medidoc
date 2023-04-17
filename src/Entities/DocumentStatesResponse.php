<?php

namespace Smartprax\Medidoc\Entities;

use Illuminate\Support\Collection;

class DocumentStatesResponse
{
    public function __construct(
        public readonly string $FolderGID,
        public readonly string $DocumentGID,
        public readonly string $AcknowledgmentToken,

        /** @var DocumentStatus[] */
        public readonly Collection $DocumentStatesList
    )
    {
    }
}
