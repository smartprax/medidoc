<?php

namespace Smartprax\Medidoc\Methods;

use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\ContentResponse;

/**
 * @method ContentResponse run(string $medidocDocumentGID, bool $contentAsPdf)
 */
class GetDocumentContent extends MedidocMethod
{
    public function handle(string $medidocDocumentGID, bool $contentAsPdf) : ContentResponse
    {
        return Medidoc::call($this, \compact('medidocDocumentGID', 'contentAsPdf'));
    }
}
