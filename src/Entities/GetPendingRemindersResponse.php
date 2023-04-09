<?php

namespace Smartprax\Medidoc\Entities;

use Phpro\SoapClient\Type\ResultInterface;

class GetPendingRemindersResponse implements ResultInterface
{
    private RemindersResponse $GetPendingRemindersResult;

    public function getGetPendingRemindersResult(): RemindersResponse
    {
        return $this->GetPendingRemindersResult;
    }

    public function withGetPendingRemindersResult(RemindersResponse $GetPendingRemindersResult
    ): GetPendingRemindersResponse|static {
        $new = clone $this;
        $new->GetPendingRemindersResult = $GetPendingRemindersResult;

        return $new;
    }
}
