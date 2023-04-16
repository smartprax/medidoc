<?php

use Smartprax\Medidoc\Requests\CheckConnection;

test('CheckConnection', function () {
    expect(CheckConnection::run())->toBeTrue();
});
