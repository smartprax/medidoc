<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetPendingCamt54File implements RequestInterface
{
    public function __construct(private string $gln, private string $password)
    {
    }

    public function getGln(): string
    {
        return $this->gln;
    }

    public function withGln(string $gln): GetPendingCamt54File|static
    {
        $new = clone $this;
        $new->gln = $gln;

        return $new;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function withPassword(string $password): GetPendingCamt54File|static
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }
}
