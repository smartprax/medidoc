<?php

namespace Smartprax\Medidoc\Entities;

use Phpro\SoapClient\Type\ResultInterface;

class CheckConnectionResponse implements ResultInterface
{
    private int $CheckConnectionResult;

    public function getCheckConnectionResult(): int
    {
        return $this->CheckConnectionResult;
    }

    public function withCheckConnectionResult(int $CheckConnectionResult): CheckConnectionResponse
    {
        $new = clone $this;
        $new->CheckConnectionResult = $CheckConnectionResult;

        return $new;
    }
}
