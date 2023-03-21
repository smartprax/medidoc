<?php

namespace Smartprax\Medidoc\NameValues\DocumentData;

use Smartprax\Medidoc\Entitites\NameValue;

/*
 *  In case an invoice is uploaded only to be forwarded to a trust center, without any other handling.
 */
class OnlyToTrustCenter extends NameValue
{
    public function __construct(
        protected bool $value = false
    ) {}

    public function value(): string
    {
        return strval(\intval($this->value));
    }
}
