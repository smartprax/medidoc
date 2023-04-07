<?php

namespace Smartprax\Medidoc\Type;

class ArrayOfDocumentStatus
{
    private DocumentStatus $DocumentStatus;

    public function getDocumentStatus(): DocumentStatus
    {
        return $this->DocumentStatus;
    }

    public function withDocumentStatus(DocumentStatus $DocumentStatus): ArrayOfDocumentStatus|static
    {
        $new = clone $this;
        $new->DocumentStatus = $DocumentStatus;

        return $new;
    }
}
