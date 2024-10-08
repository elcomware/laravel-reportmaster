<?php

use Elcomware\ReportMaster\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

Route::get('/report/download/{format}', [ReportController::class, 'download'])->name('report.download');
Route::get('/report/print', [ReportController::class, 'print'])->name('report.print');
