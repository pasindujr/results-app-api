<?php

use App\Http\Controllers\Api\V1\FirstSemResultController;
use App\Http\Controllers\Api\V1\FourthSemResultController;
use App\Http\Controllers\Api\V1\SecondSemResultController;
use App\Http\Controllers\Api\V1\StudentController;
use App\Http\Controllers\Api\V1\ThirdSemResultController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// api/v1
Route::group(['prefix' => 'v1'], function () {

    Route::apiResource('students', StudentController::class);
    Route::apiResource('firstsemresults', FirstSemResultController::class);
    Route::apiResource('secondsemresults', SecondSemResultController::class);
    Route::apiResource('thirdsemresults', ThirdSemResultController::class);
    Route::apiResource('fourthsemresults', FourthSemResultController::class);
});
