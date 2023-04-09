<?php

namespace Smartprax\Medidoc\Entities;

use Phpro\SoapClient\Type\ResultInterface;

class OrderPrintServiceResponse implements ResultInterface
{
    private GenericResponse $OrderPrintServiceResult;

    public function getOrderPrintServiceResult(): GenericResponse
    {
        return $this->OrderPrintServiceResult;
    }

    public function withOrderPrintServiceResult(GenericResponse $OrderPrintServiceResult
    ): OrderPrintServiceResponse|static {
        $new = clone $this;
        $new->OrderPrintServiceResult = $OrderPrintServiceResult;

        return $new;
    }
}
