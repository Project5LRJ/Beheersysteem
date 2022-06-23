<?php

use App\Http\Controllers\ExerciseContollerWeb;
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


Route::get('/achievements', function () {
    return view('achievement');
});

Route::get('/users', function () {
    return view('user');
});


Route::get('/exercises', [ExerciseContollerWeb::class, 'index'])->Name('exercises.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';

Auth::routes();


