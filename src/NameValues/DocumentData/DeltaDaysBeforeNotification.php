<?php

namespace Smartprax\Medidoc\NameValues\DocumentData;

use Smartprax\Medidoc\Entitites\NameValue;
use Spatie\LaravelData\Attributes\Validation\Max;
use Spatie\LaravelData\Attributes\Validation\Min;

/**
 * Numeric value between 0 and 99 indicating the number of days is given to the patient to take action before an additional email notification will be sent. This value must be less than DeltaDaysBeforeAction
 */
class DeltaDaysBeforeNotification extends NameValue
{
    public function __construct(

        #[Min(0), Max(99)]
        protected int $days

    ) {}

    public function value(): string
    {
        return strval($this->days);
    }
}
