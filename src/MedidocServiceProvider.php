<?php

declare(strict_types=1);

namespace Smartprax\Medidoc;

use Smartprax\Medidoc\Methods\CheckConnection;
use Smartprax\Medidoc\Methods\GetDocumentContent;
use Smartprax\Medidoc\Methods\GetDocumentStatesHistory;
use Smartprax\Medidoc\Methods\GetInsuranceList;
use Smartprax\Medidoc\Methods\GetPatientDataByPatientIdentityDetails;
use Smartprax\Medidoc\Methods\GetPendingDocumentsStatesList;
use Smartprax\Medidoc\Methods\GetPersonOrOrganizationList;
use Smartprax\Medidoc\Methods\SendDocumentStatesAcknowledgement;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MedidocServiceProvider extends PackageServiceProvider
{
    public function boot()
    {
        parent::boot();

        $this->app->singleton(Medidoc::class, fn () => new Medidoc());
    }

    public function configurePackage(Package $package): void
    {
        $package
            ->name('medidoc')
            ->hasConfigFile('medidoc')
            ->hasCommands([
                CheckConnection::class,
                GetInsuranceList::class,
                GetPersonOrOrganizationList::class,
                GetPendingDocumentsStatesList::class,
                GetDocumentStatesHistory::class,
                GetPatientDataByPatientIdentityDetails::class,
                GetDocumentContent::class,
                SendDocumentStatesAcknowledgement::class,
            ]);
    }
}
