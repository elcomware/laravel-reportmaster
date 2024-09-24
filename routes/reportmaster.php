<?php

use Illuminate\Support\Facades\Route;
use Elcomware\ReportMaster\Http\Controllers\ReportController;


Route::get('/report/generate', [ReportController::class, 'generate']);
Route::get('/report/download/{format}', [ReportController::class, 'download']);
Route::get('/report/view', [ReportController::class, 'view']);
