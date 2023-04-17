<?php

use Smartprax\Medidoc\Entities\DocumentStatesResponse;
use Smartprax\Medidoc\Entities\PendingDocumentStatesResponse;
use Smartprax\Medidoc\Methods\GetPendingDocumentsStatesList;
use Smartprax\Medidoc\Methods\SendDocumentStatesAcknowledgement;

test('GetPendingDocumentsStatesList', function () {

    $response = GetPendingDocumentsStatesList::run();

    expect($response)->toBeInstanceOf(PendingDocumentStatesResponse::class);

    return $response;
});

test('SendDocumentStatesAcknowledgement', function (PendingDocumentStatesResponse $documentsStatesResponse) {

    $documentsStatesResponse->DocumentStatesResponseList->each(function (DocumentStatesResponse $documentStatesResponse) {
        expect(SendDocumentStatesAcknowledgement::run($documentStatesResponse->AcknowledgmentToken))->toBeTrue();
    });

})->depends('GetPendingDocumentsStatesList');
