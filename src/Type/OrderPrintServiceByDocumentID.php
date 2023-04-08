<?php

namespace Smartprax\Medidoc\Type;

class OrderPrintServiceByDocumentID extends MedidocRequest
{
    public function __construct(
        public string $documentID,
        public Address $deliveryAddress,
        public bool $isTPCopy
    )
    {}
}
