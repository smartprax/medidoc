<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetPatientDataByInsuranceCardNumber implements RequestInterface
{
    public function __construct(private string $gln, private string $password, private string $insuranceCardNumber)
    {
    }

    public function getGln(): string
    {
        return $this->gln;
    }

    public function withGln(string $gln): GetPatientDataByInsuranceCardNumber|static
    {
        $new = clone $this;
        $new->gln = $gln;

        return $new;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function withPassword(string $password): GetPatientDataByInsuranceCardNumber|static
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }

    public function getInsuranceCardNumber(): string
    {
        return $this->insuranceCardNumber;
    }

    public function withInsuranceCardNumber(string $insuranceCardNumber): GetPatientDataByInsuranceCardNumber|static
    {
        $new = clone $this;
        $new->insuranceCardNumber = $insuranceCardNumber;

        return $new;
    }
}
