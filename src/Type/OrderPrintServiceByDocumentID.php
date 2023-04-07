<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\RequestInterface;

class OrderPrintServiceByDocumentID implements RequestInterface
{
    public function __construct(
        private string $gln,
        private string $password,
        private string $documentID,
        private Address $deliveryAddress,
        private bool $isTPCopy
    ) {
    }

    public function getGln(): string
    {
        return $this->gln;
    }

    public function withGln(string $gln): OrderPrintServiceByDocumentID|static
    {
        $new = clone $this;
        $new->gln = $gln;

        return $new;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function withPassword(string $password): OrderPrintServiceByDocumentID|static
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }

    public function getDocumentID(): string
    {
        return $this->documentID;
    }

    public function withDocumentID(string $documentID): OrderPrintServiceByDocumentID|static
    {
        $new = clone $this;
        $new->documentID = $documentID;

        return $new;
    }

    public function getDeliveryAddress(): Address
    {
        return $this->deliveryAddress;
    }

    public function withDeliveryAddress(Address $deliveryAddress): OrderPrintServiceByDocumentID|static
    {
        $new = clone $this;
        $new->deliveryAddress = $deliveryAddress;

        return $new;
    }

    public function getIsTPCopy(): bool
    {
        return $this->isTPCopy;
    }

    public function withIsTPCopy(bool $isTPCopy): OrderPrintServiceByDocumentID|static
    {
        $new = clone $this;
        $new->isTPCopy = $isTPCopy;

        return $new;
    }
}
