<?php

declare(strict_types=1);

namespace Smartprax\Medidoc\Methods;

use Smartprax\Medidoc\Facades\Medidoc;

/**
 * @method static bool run(string $token)
 */
class SendNotificationAcknowledgement extends MedidocMethod
{
    public function handle(string $token): bool
    {
        return Medidoc::call($this, \compact('token'))
                ->SendNotificationAcknowledgementResult
                ->ReturnStatus === 1;
    }
}
