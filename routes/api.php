<?php

use App\Http\Controllers\Appointment\AppointmentController;
use App\Http\Controllers\AppointmentType\AppointmentTypesController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Backoffice\Entry\EntryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('/appointments', AppointmentController::class);
Route::post('register',  [UserController::class, 'register']);
Route::post('login',  [UserController::class, 'login']);

Route::middleware(['auth:sanctum'])->group(function () {
    //Route::apiResource('/appointment-types', AppointmentTypesController::class);
    Route::post('/appointment-types',  [AppointmentTypesController::class, 'store'])
        ->middleware('isAllow:appointmentType.store');
});


Route::apiResource('/entries', EntryController::class);

