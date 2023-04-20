<?php

declare(strict_types=1);

namespace Smartprax\Medidoc\Methods;

use Smartprax\Medidoc\Entities\ContentResponse;
use Smartprax\Medidoc\Enums\ContentFormatEnum;
use Smartprax\Medidoc\Facades\Medidoc;

/**
 * @method ContentResponse run(string $medidocDocumentGID, ?bool $contentAsPdf = false)
 */
class GetDocumentResponseContent extends MedidocMethod
{
    public function handle(string $medidocDocumentGID, ?bool $contentAsPdf = false): ContentResponse
    {
        $response = Medidoc::call($this, \compact('medidocDocumentGID', 'contentAsPdf'))
            ->GetDocumentContentResult;

        return new ContentResponse(
            FolderGID: $response->FolderGID,
            DocumentGID: $response->DocumentGID,
            DocumentContent: \base64_decode($response->DocumentContent),
            FileType: ContentFormatEnum::from($response->FileType)
        );
    }
}
