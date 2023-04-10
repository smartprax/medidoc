<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Responses\SendPartialPaymentByDocumentIDResponse;

class SendPartialPaymentByDocumentID extends MedidocRequest
{
    public function handle(string $documentID, float $amount, \DateTimeInterface $paymentDate) : SendPartialPaymentByDocumentIDResponse
    {
        return $this->call(compact('documentID', 'amount', 'paymentDate'));
    }
}
