<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetPendingNotificationsResponse implements ResultInterface
{
    private NotificationsResponse $GetPendingNotificationsResult;

    public function getGetPendingNotificationsResult(): NotificationsResponse
    {
        return $this->GetPendingNotificationsResult;
    }

    public function withGetPendingNotificationsResult(NotificationsResponse $GetPendingNotificationsResult
    ): GetPendingNotificationsResponse|static {
        $new = clone $this;
        $new->GetPendingNotificationsResult = $GetPendingNotificationsResult;

        return $new;
    }
}
