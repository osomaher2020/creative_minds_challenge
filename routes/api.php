<?php

use App\Http\Controllers\AuthJwtController;
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
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/login', [AuthJwtController::class, 'login']);
    Route::post('/register', [AuthJwtController::class, 'register']);
    Route::post('/logout', [AuthJwtController::class, 'logout']);
    Route::post('/refresh', [AuthJwtController::class, 'refresh']);
    Route::get('/user-profile', [AuthJwtController::class, 'userProfile']);
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
