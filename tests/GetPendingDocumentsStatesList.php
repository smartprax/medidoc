<?php

use Smartprax\Medidoc\Requests\GetPendingDocumentsStatesList;
use Smartprax\Medidoc\Responses\PendingDocumentsStatesResponse;

test('Get Pending Documents States List.', function () {

    expect(
        GetPendingDocumentsStatesList::run()
    )->toBeInstanceOf(PendingDocumentsStatesResponse::class);
});
