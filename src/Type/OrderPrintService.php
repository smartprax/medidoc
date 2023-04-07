<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\RequestInterface;

class OrderPrintService implements RequestInterface
{
    public function __construct(
        private string $gln,
        private string $password,
        private string $medidocDocumentGID,
        private Address $deliveryAddress,
        private bool $isTPCopy
    ) {
    }

    public function getGln(): string
    {
        return $this->gln;
    }

    public function withGln(string $gln): OrderPrintService|static
    {
        $new = clone $this;
        $new->gln = $gln;

        return $new;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function withPassword(string $password): OrderPrintService|static
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }

    public function getMedidocDocumentGID(): string
    {
        return $this->medidocDocumentGID;
    }

    public function withMedidocDocumentGID(string $medidocDocumentGID): OrderPrintService|static
    {
        $new = clone $this;
        $new->medidocDocumentGID = $medidocDocumentGID;

        return $new;
    }

    public function getDeliveryAddress(): Address
    {
        return $this->deliveryAddress;
    }

    public function withDeliveryAddress(Address $deliveryAddress): OrderPrintService|static
    {
        $new = clone $this;
        $new->deliveryAddress = $deliveryAddress;

        return $new;
    }

    public function getIsTPCopy(): bool
    {
        return $this->isTPCopy;
    }

    public function withIsTPCopy(bool $isTPCopy): OrderPrintService|static
    {
        $new = clone $this;
        $new->isTPCopy = $isTPCopy;

        return $new;
    }
}
