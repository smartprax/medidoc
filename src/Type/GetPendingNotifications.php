<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetPendingNotifications implements RequestInterface
{
    public function __construct(private string $gln, private string $password)
    {
    }

    public function getGln(): string
    {
        return $this->gln;
    }

    public function withGln(string $gln): GetPendingNotifications|static
    {
        $new = clone $this;
        $new->gln = $gln;

        return $new;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function withPassword(string $password): GetPendingNotifications|static
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }
}
