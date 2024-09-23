<?php

namespace Elcomware\ReportMaster;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Elcomware\ReportMaster\Commands\ReportMasterCommand;

class ReportMasterServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-reportmaster')
            ->hasConfigFile()
            ->hasViews()
            ->hasRoute('reportmaster')
            ->hasMigration('create_reportmaster_table')
            ->hasCommand(ReportMasterCommand::class);
    }
}
