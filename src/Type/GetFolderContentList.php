<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetFolderContentList implements RequestInterface
{
    public function __construct(private string $gln, private string $password, private string $medidocFolderGID)
    {
    }

    public function getGln(): string
    {
        return $this->gln;
    }

    public function withGln(string $gln): GetFolderContentList|static
    {
        $new = clone $this;
        $new->gln = $gln;

        return $new;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function withPassword(string $password): GetFolderContentList|static
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }

    public function getMedidocFolderGID(): string
    {
        return $this->medidocFolderGID;
    }

    public function withMedidocFolderGID(string $medidocFolderGID): GetFolderContentList|static
    {
        $new = clone $this;
        $new->medidocFolderGID = $medidocFolderGID;

        return $new;
    }
}
