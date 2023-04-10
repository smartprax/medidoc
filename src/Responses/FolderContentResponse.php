<?php

namespace Smartprax\Medidoc\Responses;

use Smartprax\Medidoc\Entities\ArrayOfGuid;

class FolderContentResponse extends GenericResponse
{
    public function __construct(
        public string $FolderGID,
        public ArrayOfGuid $DocumentGIDList
    )
    {}
}
