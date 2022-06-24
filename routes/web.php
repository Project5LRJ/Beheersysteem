<?php

use App\Http\Controllers\ExerciseContollerWeb;
use App\Http\Controllers\UserControllerWeb;
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

Route::get('/exercises/{id}/info', [ExerciseContollerWeb::class, 'show'])->Name('exercises.info');

Route::get('/exercises/{id}/edit', [ExerciseContollerWeb::class, 'edit'])->Name('exercises.edit');
Route::put('/exercises/{id}/update', [ExerciseContollerWeb::class, 'update'])->name('exercises.update');

Route::get('/exercises/add', [ExerciseContollerWeb::class, 'create'])->Name('exercises.add');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('users', UserControllerWeb::class)
                                        ->except('show');

require __DIR__.'/auth.php';

Auth::routes();


