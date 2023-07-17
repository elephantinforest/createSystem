<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();



Route::prefix('registers')->middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\registerController::class, 'index'])->name('index');
    Route::get('/create', [App\Http\Controllers\registerController::class, 'create'])->name('create');
    Route::post('/store', [App\Http\Controllers\registerController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [App\Http\Controllers\registerController::class, 'edit'])->name('edit');
    Route::get('/{id}', [App\Http\Controllers\registerController::class, 'show'])->name('show');
    Route::post('/{id}', [App\Http\Controllers\registerController::class, 'update'])->name('update');
    Route::delete('/{id}', [App\Http\Controllers\registerController::class, 'destroy'])->name('destroy');

});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/register/index', [App\Http\Controllers\registerController::class, 'index'])->name('index');
// Route::post('/register/store', [App\Http\Controllers\registerController::class, 'store'])->name('store');
