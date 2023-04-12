<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Entities\Address;
use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\OrderPrintServiceByDocumentIDResponse;

class OrderPrintServiceByDocumentID extends MedidocRequest
{
    public function handle(string $documentID, Address $deliveryAddress, bool $isTPCopy) : OrderPrintServiceByDocumentIDResponse
    {
        return Medidoc::call($this, \compact('documentID', 'deliveryAddress', 'isTPCopy'));
    }
}
