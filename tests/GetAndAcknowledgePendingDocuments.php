<?php

use Smartprax\Medidoc\Methods\GetPendingDocumentsStatesList;
use Smartprax\Medidoc\Methods\SendDocumentStatesAcknowledgement;
use Smartprax\Medidoc\Responses\ArrayOfDocumentsStatesResponse;
use Smartprax\Medidoc\Responses\GenericResponse;

test('GetPendingDocumentsStatesList', function () {

    $response = GetPendingDocumentsStatesList::run();

    expect($response)->toBeInstanceOf(ArrayOfDocumentsStatesResponse::class);

    return $response;
});

test('SendDocumentStatesAcknowledgement', function (ArrayOfDocumentsStatesResponse $documentsStatesResponse) {

    $documentStatesResponses = $documentsStatesResponse->DocumentStatesResponseList->DocumentStatesResponse;

    foreach ($documentStatesResponses as $documentStatesResponse) {
        expect(
            SendDocumentStatesAcknowledgement::run($documentStatesResponse->AcknowledgmentToken)
        )->toBeInstanceOf(GenericResponse::class);
    }

})->depends('GetPendingDocumentsStatesList');
