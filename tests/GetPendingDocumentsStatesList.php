<?php

use Smartprax\Medidoc\Entities\ArrayOfDocumentStatesResponse;
use Smartprax\Medidoc\Entities\ArrayOfDocumentStatus;
use Smartprax\Medidoc\Requests\GetPendingDocumentsStatesList;
use Smartprax\Medidoc\Responses\ArrayOfDocumentsStatesResponse;

test('Get Pending Documents States List.', function () {

    expect(
        GetPendingDocumentsStatesList::run()
    )->toBeInstanceOf(ArrayOfDocumentsStatesResponse::class);
});

//test('Get Pending Documents States List.', function () {
//
//    $response = GetPendingDocumentsStatesList::run($medidocDocumentGID, now());
//
//    expect($response)
//        ->toBeInstanceOf(GenericResponse::class);
//
//    return $medidocDocumentGID;
//});
