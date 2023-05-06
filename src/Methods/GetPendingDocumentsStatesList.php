<?php

declare(strict_types=1);

namespace Smartprax\Medidoc\Methods;

use Carbon\CarbonImmutable;
use Smartprax\Medidoc\Entities\DocumentStatesResponse;
use Smartprax\Medidoc\Entities\DocumentStatus;
use Smartprax\Medidoc\Entities\PendingDocumentStatesResponse;
use Smartprax\Medidoc\Enums\DocumentStatusEnum;
use Smartprax\Medidoc\Enums\ReturnStatusEnum;
use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\MedidocException;

/**
 * @see http://api.medidoc.ch/methods/getpendingdocumentsstateslist/
 *
 * @method PendingDocumentStatesResponse run()
 */
class GetPendingDocumentsStatesList extends MedidocMethod
{
    public function handle(): PendingDocumentStatesResponse
    {

        try {

            $documentStatesResponses = Medidoc::call($this, [])
                ->GetPendingDocumentsStatesListResult
                ->DocumentStatesResponseList
                ->DocumentStatesResponse ?? [];

        } catch (MedidocException $e) {

            match ($e->getCode()) {
                ReturnStatusEnum::NoPendingDocumentFound->value => $documentStatesResponses = [],
                default => throw $e
            };
        }

        $documentStatesResponses = \is_array($documentStatesResponses) ?: [];

        return new PendingDocumentStatesResponse(
            DocumentStatesResponseList: \collect($documentStatesResponses)
                ->map(
                    fn (\stdClass $documentStateResponse) => new DocumentStatesResponse(
                        FolderGID: $documentStateResponse->FolderGID,
                        DocumentGID: $documentStateResponse->DocumentGID,
                        AcknowledgmentToken: $documentStateResponse->AcknowledgmentToken,
                        DocumentStatesList: \collect($documentStateResponse->DocumentStatesList)->map(
                            fn (\stdClass $documentStatus) => new DocumentStatus(
                                StatusChangeDate: new CarbonImmutable($documentStatus->StatusChangeDate),
                                DocumentWorkflowStatus: DocumentStatusEnum::from($documentStatus->DocumentWorkflowStatus),
                                AdditionalInformation: $documentStatus->AdditionalInformation,
                            )
                        )
                    )
                )
        );

    }
}
