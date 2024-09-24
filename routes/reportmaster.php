<?php

use Elcomware\ReportMaster\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

Route::get('/report/generate', [ReportController::class, 'generate']);
Route::get('/report/download/{format}', [ReportController::class, 'download']);
Route::get('/report/view', [ReportController::class, 'view']);
