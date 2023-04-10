<?php

namespace Smartprax\Medidoc\Responses;

use Smartprax\Medidoc\Entities\ArrayOfDocumentStatus;

class DocumentStatesResponse extends GenericResponse
{
    public function __construct(
        public string $FolderGID,
        public string $DocumentGID,
        public string $DocumentID,
        public string $AcknowledgmentToken,
        public ArrayOfDocumentStatus $DocumentStatesList,
    )
    {}
}
