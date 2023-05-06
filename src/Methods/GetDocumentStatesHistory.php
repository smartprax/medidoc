<?php

declare(strict_types=1);

namespace Smartprax\Medidoc\Methods;

use Carbon\CarbonImmutable;
use Illuminate\Console\Command;
use Smartprax\Medidoc\Entities\DocumentStatesResponse;
use Smartprax\Medidoc\Entities\DocumentStatus;
use Smartprax\Medidoc\Enums\DocumentStatusEnum;
use Smartprax\Medidoc\Facades\Medidoc;

/**
 * @method DocumentStatesResponse run(string $medidocDocumentGID)
 */
class GetDocumentStatesHistory extends MedidocMethod
{
    public function handle(string $medidocDocumentGID): DocumentStatesResponse
    {
        $response = Medidoc::call($this, compact('medidocDocumentGID'))
            ->GetDocumentStatesHistoryResult;

        return new DocumentStatesResponse(
            FolderGID: $response->FolderGID,
            DocumentGID: $response->DocumentGID,
            AcknowledgmentToken: $response->AcknowledgmentToken,
            DocumentStatesList: \collect($response->DocumentStatesList)
                ->map(
                    fn ($documenStatus) => new DocumentStatus(
                        StatusChangeDate: new CarbonImmutable($documenStatus->StatusChangeDate),
                        DocumentWorkflowStatus: DocumentStatusEnum::from($documenStatus->DocumentWorkflowStatus),
                        AdditionalInformation: $documenStatus->AdditionalInformation
                    )
                )
        );
    }

    public function getCommandSignature(): string
    {
        return parent::getCommandSignature()  . ' {document_gid}';
    }

    public function asCommand(Command $command)
    {
        ray($this->handle($command->argument('document_gid')));
    }
}
