<?php

namespace Smartprax\Medidoc\Methods;

use Carbon\Carbon;
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
    public function handle() : PendingDocumentStatesResponse
    {

        try {

            $documentStatesResponses =  Medidoc::call($this, [])
                ->GetPendingDocumentsStatesListResult
                ->DocumentStatesResponseList
                ->DocumentStatesResponse;

        } catch (MedidocException $e) {

            if($e->getCode() === ReturnStatusEnum::NoPendingDocumentFound) {
                $documentStatesResponses = [];
            } else {
                throw $e;
            }
        }



        return new PendingDocumentStatesResponse(
            DocumentStatesResponseList: \collect($documentStatesResponses)
                ->map(
                    fn(\stdClass $documentStateResponse) =>
                    new DocumentStatesResponse(
                        FolderGID: $documentStateResponse->FolderGID,
                        DocumentGID: $documentStateResponse->DocumentGID,
                        AcknowledgmentToken: $documentStateResponse->AcknowledgmentToken,
                        DocumentStatesList: \collect($documentStateResponse->DocumentStatesList)->map(
                            fn(\stdClass $documentStatus) => new DocumentStatus(
                                StatusChangeDate: new Carbon($documentStatus->StatusChangeDate),
                                DocumentWorkflowStatus: DocumentStatusEnum::from($documentStatus->DocumentWorkflowStatus),
                                AdditionalInformation:  $documentStatus->AdditionalInformation,
                            )
                        )
                    )
                )
        );

    }
}
