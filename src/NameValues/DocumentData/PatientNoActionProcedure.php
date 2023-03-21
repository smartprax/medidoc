<?php

namespace Smartprax\Medidoc\NameValues\DocumentData;

use Smartprax\Medidoc\Entitites\NameValue;

/**
 * Procedure taken by Medidoc if the patient didn’t take an action for a TP invoice.
 *
 * 0 = forward electronically as TP
 * 1 = stop process and inform client
 */
class PatientNoActionProcedure extends NameValue
{
    public function __construct(
        protected bool $value = false
    ) {}

    public function value(): string
    {
        return strval(\intval($this->value));
    }
}
