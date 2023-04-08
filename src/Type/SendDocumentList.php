<?php

namespace Smartprax\Medidoc\Type;

class SendDocumentList extends MedidocRequest
{
    public function __construct(public ArrayOfDocumentData $documentDataList)
    {}
}
