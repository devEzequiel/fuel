<?php

use App\Http\Controllers\Driver\DriverController;
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
    return view('master');
});

Auth::routes();

Route::namespace('driver')->name('drivers.')->group(function () {
    Route::get('/driver', [DriverController::class, 'index'])->name('list');
    Route::get('/driver/create', [DriverController::class, 'create'])->name('create');
    Route::get('/driver/{id}', [DriverController::class, 'edit'])->name('edit');

    Route::post('/driver', [DriverController::class, 'store'])->name('store');
    Route::put('/driver/{id}', [DriverController::class, 'update'])->name('update');
    Route::get('/driver/delete/{id}', [DriverController::class, 'destroy'])->name('delete');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
