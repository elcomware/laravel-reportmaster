<?php

namespace Elcomware\ReportMaster\Tests;

use Elcomware\ReportMaster\ReportMasterServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;
use Orchestra\Testbench\Concerns\WithWorkbench;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    use WithWorkbench;
    use InteractsWithViews;
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Elcomware\\ReportMaster\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            ReportMasterServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_reportmaster_table.php.stub';
        $migration->up();
        */
    }

   protected function getPackageAliases($app)
   {
       return [
           'ReportMaster' => 'Elcomware\ReportMaster\Facades',
       ];
   }


}
