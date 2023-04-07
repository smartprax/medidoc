<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetPendingVesrRecords implements RequestInterface
{
    public function __construct(private string $gln, private string $password)
    {
    }

    public function getGln(): string
    {
        return $this->gln;
    }

    public function withGln(string $gln): GetPendingVesrRecords|static
    {
        $new = clone $this;
        $new->gln = $gln;

        return $new;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function withPassword(string $password): GetPendingVesrRecords|static
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }
}
