<?php

namespace Smartprax\Medidoc\Methods;

use Smartprax\Medidoc\Entities\Address;
use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\OrderPrintServiceResponse;

class OrderPrintService extends MedidocMethod
{
    public function handle(string $medidocDocumentGID, Address $deliveryAddress, bool $isTPCopy): OrderPrintServiceResponse
    {
        return Medidoc::call($this, \compact('medidocDocumentGID', 'deliveryAddress', 'isTPCopy'));
    }
}
