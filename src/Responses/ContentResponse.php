<?php

namespace Smartprax\Medidoc\Responses;

class ContentResponse extends GenericResponse
{
    public function __construct(
        public string $FolderGID,
        public string $DocumentGID,
        public string $DocumentID,
        public string $DocumentContent,
        public int $FileType,
    )
    {}
}
