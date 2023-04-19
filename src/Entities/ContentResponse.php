<?php

namespace Smartprax\Medidoc\Entities;

use Smartprax\Medidoc\Enums\ContentFormatEnum;

class ContentResponse
{
    public function __construct(
        public readonly string $FolderGID,
        public readonly string $DocumentGID,
        public readonly string $DocumentContent,
        public readonly ContentFormatEnum $FileType,
    ) {
    }
}
