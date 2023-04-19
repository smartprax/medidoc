<?php

namespace Smartprax\Medidoc\Methods;

use Carbon\Carbon;
use Smartprax\Medidoc\Entities\DocumentStatus;
use Smartprax\Medidoc\Entities\DocumentStatesResponse;
use Smartprax\Medidoc\Enums\DocumentStatusEnum;
use Smartprax\Medidoc\Facades\Medidoc;

/**
 * @method DocumentStatesResponse run(string $medidocDocumentGID)
 */
class GetDocumentStatesHistory extends MedidocMethod
{
    public function handle(string $medidocDocumentGID) : DocumentStatesResponse
    {
        $response = Medidoc::call($this, compact('medidocDocumentGID'))
            ->GetDocumentStatesHistoryResult;

        return new DocumentStatesResponse(
            FolderGID: $response->FolderGID,
            DocumentGID: $response->DocumentGID,
            AcknowledgmentToken: $response->AcknowledgmentToken,
            DocumentStatesList: \collect($response->DocumentStatesList->DocumentStatus)
                ->map(
                    fn($documenStatus) => new DocumentStatus(
                        StatusChangeDate: new Carbon($documenStatus->StatusChangeDate),
                        DocumentWorkflowStatus: DocumentStatusEnum::from($documenStatus->DocumentWorkflowStatus),
                        AdditionalInformation: $documenStatus->AdditionalInformation
                    )
                )
        );
    }
}
