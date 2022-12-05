<?php

use App\Http\Controllers\Api\PatientController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::controller(PatientController::class)->group(function () {

    Route::get('/patients', 'index');
    Route::post('/patient', 'store');
    Route::get('/patient/{id}', 'show');
    Route::put('/patient/{id}', 'update');
    Route::delete('/patient/{id}', 'destroy');
});


