<?php

declare(strict_types=1);

namespace Smartprax\Medidoc\Methods;

use Carbon\CarbonImmutable;
use Smartprax\Medidoc\Facades\Medidoc;

/**
 * @method static bool run(string $medidocDocumentGID, CarbonImmutable $completeDate)
 */
class CompleteDocument extends MedidocMethod
{
    public function handle(string $DocumentGID, CarbonImmutable $completeDate): bool
    {
        return Medidoc::call($this, [
            'medidocDocumentGID' => $DocumentGID,
            'completeDate' => $completeDate->toIso8601String(),
        ])
                ->CompleteDocumentResult
                ->ReturnStatus === 1;
    }
}
