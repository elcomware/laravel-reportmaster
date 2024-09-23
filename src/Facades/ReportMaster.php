<?php

namespace Elcomware\ReportMaster\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Elcomware\ReportMaster\ReportMaster
 */
class ReportMaster extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Elcomware\ReportMaster\ReportMaster::class;
    }
}
