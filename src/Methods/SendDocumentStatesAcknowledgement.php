<?php

namespace Smartprax\Medidoc\Methods;

use Smartprax\Medidoc\Facades\Medidoc;

/**
 * @see http://api.medidoc.ch/methods/senddocumentstatesacknowledgement/
 *
 * @method bool run(string $token)
 */
class SendDocumentStatesAcknowledgement extends MedidocMethod
{
    public function handle(string $token) : bool
    {
        return Medidoc::call($this, \compact('token'))
            ->SendDocumentStatesAcknowledgementResult
            ->ReturnStatus === 1;
    }
}
