<?php

namespace Smartprax\Medidoc\Entities;

class OrderPrintServiceByDocumentID extends MedidocRequest
{
    public function __construct(
        public string $documentID,
        public Address $deliveryAddress,
        public bool $isTPCopy
    )
    {}
}
