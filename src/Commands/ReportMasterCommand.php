<?php

namespace Elcomware\ReportMaster\Commands;

use Illuminate\Console\Command;

class ReportMasterCommand extends Command
{
    public $signature = 'laravel-reportmaster';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
