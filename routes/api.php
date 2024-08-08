<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/address/district/{stateCode}', [App\Http\Controllers\Api\AddressController::class, 'getDistrict']);