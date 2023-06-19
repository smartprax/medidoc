<?php

declare(strict_types=1);

namespace Smartprax\Medidoc;

use Smartprax\Medidoc\Enums\ReturnStatusEnum;

class MedidocReturnStatusException extends \Exception
{
    public function __construct(public readonly ReturnStatusEnum $returnStatusEnum)
    {
        parent::__construct($this->returnStatusEnum->name, $this->returnStatusEnum->value);
    }
}
