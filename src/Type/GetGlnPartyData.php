<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetGlnPartyData implements RequestInterface
{
    public function __construct(
        private string $gln,
        private string $password,
        private ArrayOfNameValue $filterParameters
    ) {
    }

    public function getGln(): string
    {
        return $this->gln;
    }

    public function withGln(string $gln): GetGlnPartyData|static
    {
        $new = clone $this;
        $new->gln = $gln;

        return $new;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function withPassword(string $password): GetGlnPartyData|static
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }

    public function getFilterParameters(): ArrayOfNameValue
    {
        return $this->filterParameters;
    }

    public function withFilterParameters(ArrayOfNameValue $filterParameters): GetGlnPartyData|static
    {
        $new = clone $this;
        $new->filterParameters = $filterParameters;

        return $new;
    }
}
