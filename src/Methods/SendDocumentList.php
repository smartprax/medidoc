<?php

declare(strict_types=1);

namespace Smartprax\Medidoc\Methods;

use Carbon\CarbonImmutable;
use Smartprax\Medidoc\Entities\ArrayOfDocumentData;
use Smartprax\Medidoc\Entities\DocumentListResponse;
use Smartprax\Medidoc\Entities\SendDocumentResponse;
use Smartprax\Medidoc\Enums\DocumentStatusEnum;
use Smartprax\Medidoc\Facades\Medidoc;

/**
 * @method static DocumentListResponse run(ArrayOfDocumentData $documentDataList)
 */
class SendDocumentList extends MedidocMethod
{
    public function handle(ArrayOfDocumentData $documentDataList): DocumentListResponse
    {
        $DocumentListResult = Medidoc::call($this, \compact('documentDataList'))
            ->SendDocumentListResult
            ->SendDocumentResponse;

        return new DocumentListResponse(\collect($DocumentListResult)->map(fn ($SendDocumentResponse) => new SendDocumentResponse(
            FolderGID: $SendDocumentResponse->FolderGID,
            DocumentGID: $SendDocumentResponse->DocumentGID,
            DocumentID: (int) $SendDocumentResponse->DocumentID,
            DocumentWorkflowStatus: DocumentStatusEnum::from($SendDocumentResponse->DocumentWorkflowStatus),
            UploadDateTime: new CarbonImmutable($SendDocumentResponse->UploadDateTime),
        )));

    }
}
