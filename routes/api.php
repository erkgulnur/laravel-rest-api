<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PassengerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
*/
Route::prefix('/companies')->group(function() {
    Route::get('', [CompanyController::class, 'index']);
    Route::post('', [CompanyController::class, 'store']);
    Route::get('/{company}', [CompanyController::class, 'show']);
    Route::put('/{company}', [CompanyController::class, 'update']);
    Route::delete('/{company}', [CompanyController::class, 'destroy']);
});




Route::get('/countries', [CountryController::class, 'index']);


Route::prefix('/passengers')->group(function() {
    Route::get('', [PassengerController::class, 'index']);
    Route::post('', [PassengerController::class, 'store']);
    Route::get('/{passenger}', [PassengerController::class, 'show']);
    Route::put('/{passenger}', [PassengerController::class, 'update']);
    Route::delete('/{passenger}', [PassengerController::class, 'destroy']);
});

Route::prefix('/locations')->group(function() {
    Route::get('', [LocationController::class, 'index']);
    Route::post('', [LocationController::class, 'store']);
    Route::get('/{location}', [LocationController::class, 'show']);
    Route::put('/{location}', [LocationController::class, 'update']);
    Route::delete('/{location}', [LocationController::class, 'destroy']);
});

Route::get('/flights', [FlightController::class, 'index']);
