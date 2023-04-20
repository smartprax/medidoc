<?php

declare(strict_types=1);

namespace Smartprax\Medidoc\Methods;

use Smartprax\Medidoc\Facades\Medidoc;

class SendNotificationAcknowledgement extends MedidocMethod
{
    public function handle(string $token): bool
    {
        return Medidoc::call($this, \compact('token'))
                ->SendNotificationAcknowledgementResult
                ->ReturnStatus === 1;
    }
}
