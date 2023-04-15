<?php

namespace Smartprax\Medidoc\Responses;

use Smartprax\Medidoc\Enums\DocumentStatusEnum;

class SendDocumentResponse extends GenericResponse
{
    public function __construct(
        public string $FolderGID,
        public string $DocumentGID,
        public string $DocumentID,
        public int $DocumentWorkflowStatus,
        public string $UploadDateTime,
    )
    {}

    public function getDocumentStatus(): DocumentStatusEnum
    {
        return DocumentStatusEnum::from($this->DocumentWorkflowStatus);
    }
}
