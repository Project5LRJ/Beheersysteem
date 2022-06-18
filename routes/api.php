<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\User\UserAchievementController;
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

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/user/achievements', [UserAchievementController::class, 'index']);
    Route::post('/logout', [AuthenticationController::class, 'logout']);

    Route::apiResource('exercises', ExerciseController::class)
        ->only('store', 'update', 'destroy');

    Route::apiResource('Achievement', ExerciseController::class);
});


Route::post('/login', [AuthenticationController::class, 'login']);
Route::post('/register', [AuthenticationController::class, 'register']);

Route::apiResource('exercises', ExerciseController::class)
                    ->only('index', 'show');
