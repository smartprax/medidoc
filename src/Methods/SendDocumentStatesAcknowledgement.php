<?php

declare(strict_types=1);

namespace Smartprax\Medidoc\Methods;

use Smartprax\Medidoc\Facades\Medidoc;

/**
 * @see http://api.medidoc.ch/methods/senddocumentstatesacknowledgement/
 *
 * @method static bool run(string $token)
 */
class SendDocumentStatesAcknowledgement extends MedidocMethod
{
    public function handle(string $token): bool
    {
        return Medidoc::call($this, \compact('token'))
            ->SendDocumentStatesAcknowledgementResult
            ->ReturnStatus === 1;
    }
}
