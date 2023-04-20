<?php

declare(strict_types=1);

namespace Smartprax\Medidoc\Methods;

use Smartprax\Medidoc\Entities\ContentResponse;
use Smartprax\Medidoc\Enums\ContentFormatEnum;
use Smartprax\Medidoc\Facades\Medidoc;

/**
 * @method ContentResponse run(string $xmlContent, ContentFormatEnum $contentFormat, bool $isPatientCopy)
 */
class ConvertXmlToPdf extends MedidocMethod
{
    public function handle(string $xmlContent, ContentFormatEnum $contentFormat, bool $isPatientCopy): ContentResponse
    {
        $response = Medidoc::call($this, [
            'xmlContent' => $xmlContent,
            'contentFormat' => $contentFormat->name,
            'isPatientCopy' => $isPatientCopy,
        ])->ConvertXmlToPdfResult;

        return new ContentResponse(
            FolderGID: $response->FolderGID,
            DocumentGID: $response->DocumentGID,
            DocumentContent: \base64_decode($response->DocumentContent),
            FileType: ContentFormatEnum::from($response->FileType),
        );
    }
}
