<?php

namespace Smartprax\Medidoc\Entities;

class CompleteDocumentByDocumentID extends MedidocRequest
{
    public function __construct(public string $documentID, public \DateTimeInterface $completeDate) {}
}
