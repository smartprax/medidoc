<?php

namespace Smartprax\Medidoc\Methods;

use Smartprax\Medidoc\Facades\Medidoc;

/**
 * @method bool run(string $medidocDocumentGID)
 */
class CancelDocument extends MedidocMethod
{
    public function handle(string $medidocDocumentGID): bool
    {
        return Medidoc::call($this, \compact('medidocDocumentGID'))
                ->CancelDocumentResult
                ->ReturnStatus === 1;
    }
}
