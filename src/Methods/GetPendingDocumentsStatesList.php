<?php

declare(strict_types=1);

namespace Smartprax\Medidoc\Methods;

use Carbon\CarbonImmutable;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Smartprax\Medidoc\Entities\DocumentStatesResponse;
use Smartprax\Medidoc\Entities\DocumentStatus;
use Smartprax\Medidoc\Entities\PendingDocumentStatesResponse;
use Smartprax\Medidoc\Enums\DocumentStatusEnum;
use Smartprax\Medidoc\Enums\ReturnStatusEnum;
use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\MedidocReturnStatusException;

/**
 * @see http://api.medidoc.ch/methods/getpendingdocumentsstateslist/
 *
 * @method static PendingDocumentStatesResponse run()
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

        } catch (MedidocReturnStatusException $e) {
            match ($e->getCode()) {
                ReturnStatusEnum::NoPendingDocumentFound->value => $documentStatesResponses = [],
                default => throw $e
            };
        }

        $documentStatesResponses = \is_array($documentStatesResponses) ? $documentStatesResponses : [];

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

    /**
     * @throws MedidocReturnStatusException
     */
    public function asCommand(Command $command)
    {
        $this
            ->handle()
            ->DocumentStatesResponseList
            ->groupBy(fn(DocumentStatesResponse $documentStatesResponse) => $documentStatesResponse->DocumentGID)
            ->each(fn(Collection $documentStatesResponses, string $document_gid) => $command
                ->table([
                    'Document GID', 'Timestamp', 'State', 'Additional Information'
                ], $documentStatesResponses
                    ->map(fn(DocumentStatesResponse $documentStatesResponse) => $documentStatesResponse
                        ->DocumentStatesList->map(fn(DocumentStatus $documentStatus) => [
                            'Document GID' => $document_gid,
                            'Timestamp' => $documentStatus->StatusChangeDate->toDateTimeString(),
                            'State' => $documentStatus->DocumentWorkflowStatus->name,
                            'AdditionalInformation' => $documentStatus->AdditionalInformation,
                        ])
                    )
                    ->flatten(1)
                    ->toArray()
                )
            );
    }
}
