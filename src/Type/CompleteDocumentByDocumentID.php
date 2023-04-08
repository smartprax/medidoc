<?php

namespace Smartprax\Medidoc\Type;

class CompleteDocumentByDocumentID extends MedidocRequest
{
    public function __construct(public string $documentID, public \DateTimeInterface $completeDate) {}
}
