<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::controller(UserController::class)->prefix('users')->group(function () {
        Route::get('/', 'index')->name('users.index');
        Route::get('/create', 'create')->name('users.create');
        Route::post('/', 'store')->name('users.store');
        Route::get('/{user}', 'show')->name('users.show');
        Route::get('/{user}/edit', 'edit')->name('users.edit');
        Route::post('/update/{user}', 'update')->name('users.update');
        Route::get('/delete/{user}', 'delete')->name('users.delete');
    });
    Route::controller(TestController::class)->prefix('tests')->group(function () {
        Route::get('/', 'index')->name('tests.index');
        Route::get('/create', 'create')->name('tests.create');
        Route::post('/', 'store')->name('tests.store');
        Route::get('/{test}', 'show')->name('tests.show');
        Route::get('/{test}/edit', 'edit')->name('tests.edit');
        Route::post('/update/{test}', 'update')->name('tests.update');
        Route::get('/delete/{test}', 'delete')->name('tests.delete');
    });
});

require __DIR__.'/auth.php';
