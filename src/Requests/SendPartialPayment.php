<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Responses\SendPartialPaymentResponse;

class SendPartialPayment extends MedidocRequest
{
    public function handle(string $medidocDocumentGID, float $amount, \DateTimeInterface $paymentDate) : SendPartialPaymentResponse
    {
        return $this->call(\compact('medidocDocumentGID', 'amount', 'paymentDate'));
    }
}
