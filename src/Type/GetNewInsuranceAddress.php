<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetNewInsuranceAddress implements RequestInterface
{
    public function __construct(private string $gln, private string $password, private string $medidocDocumentGID)
    {
    }

    public function getGln(): string
    {
        return $this->gln;
    }

    public function withGln(string $gln): GetNewInsuranceAddress|static
    {
        $new = clone $this;
        $new->gln = $gln;

        return $new;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function withPassword(string $password): GetNewInsuranceAddress|static
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }

    public function getMedidocDocumentGID(): string
    {
        return $this->medidocDocumentGID;
    }

    public function withMedidocDocumentGID(string $medidocDocumentGID): GetNewInsuranceAddress|static
    {
        $new = clone $this;
        $new->medidocDocumentGID = $medidocDocumentGID;

        return $new;
    }
}
