<?php

namespace Smartprax\Medidoc\Entities;

class SendDocumentList extends MedidocRequest
{
    public function __construct(public ArrayOfDocumentData $documentDataList)
    {}
}
