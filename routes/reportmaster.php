<?php

use Elcomware\ReportMaster\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

Route::post('/report/generate', [ReportController::class, 'generate']);
Route::post('/report/download/{format}', [ReportController::class, 'download']);
Route::post('/report/view', [ReportController::class, 'view']);
