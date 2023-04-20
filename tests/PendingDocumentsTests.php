<?php

declare(strict_types=1);

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

    if ($documentsStatesResponse->DocumentStatesResponseList->count() === 0) {

        // Bogus assertion when there are no document states.
        expect($documentsStatesResponse->DocumentStatesResponseList)->toHaveCount(0);
    } else {

        $documentsStatesResponse->DocumentStatesResponseList->each(function (
            DocumentStatesResponse $documentStatesResponse
        ) {
            expect(SendDocumentStatesAcknowledgement::run($documentStatesResponse->AcknowledgmentToken))->toBeTrue();
        });
    }

})->depends('GetPendingDocumentsStatesList');
