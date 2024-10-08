<?php

namespace Elcomware\ReportMaster;

use Elcomware\ReportMaster\Commands\ReportMasterCommand;
use Elcomware\ReportMaster\Components\Button;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasViewComponents('report',
                Button::class,
                Components\ButtonContainer::class,
                Components\ButtonItem::class
            )
            ->hasViews()
            ->hasRoute('reportmaster')
            ->hasMigration('create_reportmaster_table')
            ->hasCommand(ReportMasterCommand::class);
    }
}
