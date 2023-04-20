<?php

declare(strict_types=1);

use Smartprax\Medidoc\Methods\CheckConnection;

test('CheckConnection', function () {
    expect(CheckConnection::run())->toBeTrue();
});
