<?php

declare(strict_types=1);

test('No debugging functions used.')
    ->expect(['dd', 'dump', 'ray'])
    ->each->not->toBeUsed();
