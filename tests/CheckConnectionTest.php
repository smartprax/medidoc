<?php

use Smartprax\Medidoc\Methods\CheckConnection;

test('CheckConnection', function () {
    expect(CheckConnection::run())->toBeTrue();
});
