<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UploadEsrFile implements RequestInterface
{
    public function __construct(
        private string $gln,
        private string $password,
        private int $type,
        private string $fileContent
    ) {
    }

    public function getGln(): string
    {
        return $this->gln;
    }

    public function withGln(string $gln): UploadEsrFile|static
    {
        $new = clone $this;
        $new->gln = $gln;

        return $new;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function withPassword(string $password): UploadEsrFile|static
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }

    public function getType(): int
    {
        return $this->type;
    }

    public function withType(int $type): UploadEsrFile|static
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }

    public function getFileContent(): string
    {
        return $this->fileContent;
    }

    public function withFileContent(string $fileContent): UploadEsrFile|static
    {
        $new = clone $this;
        $new->fileContent = $fileContent;

        return $new;
    }
}
