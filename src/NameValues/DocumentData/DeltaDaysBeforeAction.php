<?php

namespace Smartprax\Medidoc\NameValues\DocumentData;

use Smartprax\Medidoc\Entitites\NameValue;
use Spatie\LaravelData\Attributes\Validation\Max;
use Spatie\LaravelData\Attributes\Validation\Min;

/**
 * Numeric value between 0 and 99 indicating the number of days is given to the patient to take an action for a TP invoice. (-1 = no action)
 */
class DeltaDaysBeforeAction extends NameValue
{
    public function __construct(

        #[Min(-1), Max(99)]
        protected int $days = -1

    ) {}

    public function value(): string
    {
        return strval($this->days);
    }
}
