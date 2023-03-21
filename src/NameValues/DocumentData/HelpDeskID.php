<?php

namespace Smartprax\Medidoc\NameValues\DocumentData;

use Smartprax\Medidoc\Entitites\NameValue;

class HelpDeskID extends NameValue
{
    public function __construct(
        protected string $helpDeskId
    ) {}

    public function value(): string
    {
        return $this->helpDeskId;
    }
}
