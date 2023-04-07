<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SendCamt54FilesAcknowledgement implements RequestInterface
{
    public function __construct(private string $gln, private string $password, private string $token)
    {
    }

    public function getGln(): string
    {
        return $this->gln;
    }

    public function withGln(string $gln): SendCamt54FilesAcknowledgement|static
    {
        $new = clone $this;
        $new->gln = $gln;

        return $new;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function withPassword(string $password): SendCamt54FilesAcknowledgement|static
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function withToken(string $token): SendCamt54FilesAcknowledgement|static
    {
        $new = clone $this;
        $new->token = $token;

        return $new;
    }
}
