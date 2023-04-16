<?php

namespace Smartprax\Medidoc\Methods;

use Carbon\Carbon;
use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\GenericResponse;

/**
 * @method GenericResponse run(string $medidocDocumentGID, Carbon $completeDate)
 */
class CompleteDocument extends MedidocMethod
{
    public function handle(string $medidocDocumentGID, Carbon $completeDate) : GenericResponse
    {
        return Medidoc::call($this, [
            'medidocDocumentGID' => $medidocDocumentGID,
            'completeDate' => $completeDate->toIso8601String(),
        ]);
    }

}
