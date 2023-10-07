<?php

use Illuminate\Support\Facades\Route;
use Astergo\StackfoodPrintnode\Http\Controllers\PrintController;

// Route::group(['namespace' => 'Astergo\StackfoodPrintnode\Http\Controllers'], function() {

    Route::get("astergo/config", [PrintController::class, 'configPage'])->name('config.page');

// });

