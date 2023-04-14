<?php

use Smartprax\Medidoc\Requests\CheckConnection;

test('Check Connection.', function () {
    expect(CheckConnection::run())->toBe(1);
});
