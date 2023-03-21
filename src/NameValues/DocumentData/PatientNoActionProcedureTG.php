<?php

namespace Smartprax\Medidoc\NameValues\DocumentData;

use Smartprax\Medidoc\Entitites\NameValue;
use Spatie\LaravelData\Attributes\Validation\Max;
use Spatie\LaravelData\Attributes\Validation\Min;

/**
 *PatientNoActionProcedureTG : Procedure taken by Medidoc if the patient didn’t take an action for a TG invoice.
 *
 * 0 = forward electronically as TP
 * 1 = stop process and inform client
 * 2 = print service
 * 3 = forward to Ärztekasse
 * 4 = forward to Curabill
 */
class PatientNoActionProcedureTG extends NameValue
{
    public function __construct(

        #[Min(0), Max(4)]
        protected int $procedure

    ) {}

    public function value(): string
    {
        return strval($this->procedure);
    }
}
