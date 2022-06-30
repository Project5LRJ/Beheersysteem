<?php

use App\Http\Controllers\Web\ExerciseController;
use App\Http\Controllers\Web\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::group(['middleware' => ['auth']], function () {
    Route::resource('exercises', ExerciseController::class);
    Route::resource('users', UserController::class)->except('show');

    Route::get('/achievements', function () {
        return view('achievement');
    });
});

require __DIR__.'/auth.php';

Auth::routes();


