<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Entities\Address;
use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\OrderPrintServiceResponse;

class OrderPrintService extends MedidocRequest
{
    public function handle(string $medidocDocumentGID, Address $deliveryAddress, bool $isTPCopy) : OrderPrintServiceResponse
    {
        return Medidoc::call($this, \compact('medidocDocumentGID', 'deliveryAddress', 'isTPCopy'));
    }
}
