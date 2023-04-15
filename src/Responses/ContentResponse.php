<?php

namespace Smartprax\Medidoc\Responses;

use Smartprax\Medidoc\ContentFormatEnum;

class ContentResponse extends GenericResponse
{
    public function __construct(
        public string $FolderGID,
        public string $DocumentGID,
        public string $DocumentID,
        public string $DocumentContent,
        public int $FileType
    )
    {}

    public function getFileType(): ContentFormatEnum
    {
        return ContentFormatEnum::from($this->FileType);
    }

    public function getDocumentContent(): string
    {
        return \base64_decode($this->DocumentContent);
    }
}
