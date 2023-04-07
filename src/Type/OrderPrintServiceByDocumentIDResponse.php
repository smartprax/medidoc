<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\ResultInterface;

class OrderPrintServiceByDocumentIDResponse implements ResultInterface
{
    private GenericResponse $OrderPrintServiceByDocumentIDResult;

    public function getOrderPrintServiceByDocumentIDResult(): GenericResponse
    {
        return $this->OrderPrintServiceByDocumentIDResult;
    }

    public function withOrderPrintServiceByDocumentIDResult(GenericResponse $OrderPrintServiceByDocumentIDResult
    ): OrderPrintServiceByDocumentIDResponse|static {
        $new = clone $this;
        $new->OrderPrintServiceByDocumentIDResult = $OrderPrintServiceByDocumentIDResult;

        return $new;
    }
}
