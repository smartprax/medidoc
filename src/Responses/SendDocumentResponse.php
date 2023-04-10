<?php

namespace Smartprax\Medidoc\Responses;

class SendDocumentResponse extends GenericResponse
{
    public function __construct(
        public SendDocumentResponse $SendDocumentResult,
        public string $FolderGID,
        public string $DocumentGID,
        public string $DocumentID,
        public int $DocumentWorkflowStatus,
        public \DateTimeInterface $UploadDateTime,
    )
    {}
}
