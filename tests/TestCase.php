<?php

declare(strict_types=1);

namespace Smartprax\Medidoc\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Smartprax\Medidoc\MedidocServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            MedidocServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        /*
        $migration = include __DIR__.'/../database/migrations/create_medidoc_table.php.stub';
        $migration->up();
        */
    }
}
