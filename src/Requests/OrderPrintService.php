<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Entities\Address;
use Smartprax\Medidoc\Responses\OrderPrintServiceResponse;

class OrderPrintService extends MedidocRequest
{
    public function handle(string $medidocDocumentGID, Address $deliveryAddress, bool $isTPCopy) : OrderPrintServiceResponse
    {
        return $this->call(\compact('medidocDocumentGID', 'deliveryAddress', 'isTPCopy'));
    }
}
