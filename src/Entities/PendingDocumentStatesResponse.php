<?php

declare(strict_types=1);

namespace Smartprax\Medidoc\Entities;

use Illuminate\Support\Collection;

class PendingDocumentStatesResponse
{
    public function __construct(

        /** @var DocumentStatesResponse[] $DocumentStatesResponseList */
        public readonly Collection $DocumentStatesResponseList
    ) {
    }
}
