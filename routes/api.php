<?php

use App\Http\Controllers\coriander\IndexController;
use App\Http\Controllers\keeper\HealthController;
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

Route::prefix('keeper')->group(function () {
    Route::resource('healths', HealthController::class);
});

Route::prefix('coriander')->group(function () {
    Route::get('data/{userId}', [IndexController::class, 'index']);
});
