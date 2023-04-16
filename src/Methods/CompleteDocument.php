<?php

namespace Smartprax\Medidoc\Methods;

use Carbon\Carbon;
use Smartprax\Medidoc\Facades\Medidoc;

/**
 * @method bool run(string $medidocDocumentGID, Carbon $completeDate)
 */
class CompleteDocument extends MedidocMethod
{
    public function handle(string $DocumentGID, Carbon $completeDate) : bool
    {
        return Medidoc::call($this, [
                'medidocDocumentGID' => $DocumentGID,
                'completeDate' => $completeDate->toIso8601String(),
            ])
                ->CompleteDocumentResult
                ->ReturnStatus === 1;
    }

}
