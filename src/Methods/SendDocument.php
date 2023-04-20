<?php

declare(strict_types=1);

namespace Smartprax\Medidoc\Methods;

use Carbon\CarbonImmutable;
use Smartprax\Medidoc\Entities\DocumentData;
use Smartprax\Medidoc\Entities\SendDocumentResponse;
use Smartprax\Medidoc\Enums\DocumentStatusEnum;
use Smartprax\Medidoc\Facades\Medidoc;

/**
 * @see http://api.medidoc.ch/methods/senddocument/
 *
 * @method SendDocumentResponse run(DocumentData $documentData)
 */
class SendDocument extends MedidocMethod
{
    public function handle(DocumentData $documentData): SendDocumentResponse
    {
        $sendDocumentResult = Medidoc::call($this, \compact('documentData'))
            ->SendDocumentResult;

        return new SendDocumentResponse(
            FolderGID: $sendDocumentResult->FolderGID,
            DocumentGID: $sendDocumentResult->DocumentGID,
            DocumentID: (int) $sendDocumentResult->DocumentID,
            DocumentWorkflowStatus: DocumentStatusEnum::from($sendDocumentResult->DocumentWorkflowStatus),
            UploadDateTime: new CarbonImmutable($sendDocumentResult->UploadDateTime)
        );
    }
}
