<?php

use App\Http\Controllers\Driver\DriverController;
use App\Http\Controllers\Fueling\FuelingController;
use App\Http\Controllers\Vehicle\VehicleController;
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

Route::namespace('driver')->name('drivers.')->middleware('auth')->group(function () {
    Route::get('/driver', [DriverController::class, 'index'])->name('list');
    Route::get('/driver/create', [DriverController::class, 'create'])->name('create');
    Route::get('/driver/{id}', [DriverController::class, 'edit'])->name('edit');

    Route::post('/driver', [DriverController::class, 'store'])->name('store');
    Route::put('/driver/{id}', [DriverController::class, 'update'])->name('update');
    Route::get('/driver/delete/{id}', [DriverController::class, 'destroy'])->name('delete');
});

Route::namespace('vehicle')->name('vehicles.')->middleware('auth')->group(function () {
    Route::get('/vehicle', [VehicleController::class, 'index'])->name('list');
    Route::get('/vehicle/create', [VehicleController::class, 'create'])->name('create');
    Route::get('/vehicle/{id}', [VehicleController::class, 'edit'])->name('edit');

    Route::post('/vehicle', [VehicleController::class, 'store'])->name('store');
    Route::put('/vehicle/{id}', [VehicleController::class, 'update'])->name('update');
    Route::get('/vehicle/delete/{id}', [VehicleController::class, 'destroy'])->name('delete');
});

Route::namespace('fueling')->name('fuelings.')->middleware('auth')->group(function () {
    Route::get('/fueling', [FuelingController::class, 'index'])->name('list');
    Route::get('/fueling/create', [FuelingController::class, 'create'])->name('create');

    Route::post('/fueling', [FuelingController::class, 'store'])->name('store');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
