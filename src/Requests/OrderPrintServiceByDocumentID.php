<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Entities\Address;
use Smartprax\Medidoc\Responses\OrderPrintServiceByDocumentIDResponse;

class OrderPrintServiceByDocumentID extends MedidocRequest
{
    public function handle(string $documentID, Address $deliveryAddress, bool $isTPCopy) : OrderPrintServiceByDocumentIDResponse
    {
        return $this->call(\compact('documentID', 'deliveryAddress', 'isTPCopy'));
    }
}
