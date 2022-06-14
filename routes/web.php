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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/clients', [App\Http\Controllers\ClientController::class, 'index'])->name('clients');
    Route::get('/clients/create', [App\Http\Controllers\ClientController::class, 'create'])->name('clients.create');
    Route::post('/clients/store', [App\Http\Controllers\ClientController::class, 'store'])->name('clients.store');

    Route::get('/estates', [App\Http\Controllers\EstateController::class, 'index'])->name('estates');
    Route::get('/estates/create', [App\Http\Controllers\EstateController::class, 'create'])->name('estates.create');
    Route::post('/estates/store', [App\Http\Controllers\EstateController::class, 'store'])->name('estates.store');

    Route::get('/regions', [App\Http\Controllers\RegionController::class, 'index'])->name('regions');
    Route::get('/regions/create', [App\Http\Controllers\RegionController::class, 'create'])->name('regions.create');
    Route::post('/regions/store', [App\Http\Controllers\RegionController::class, 'store'])->name('regions.store');

    Route::get('/payments', [App\Http\Controllers\PaymentController::class, 'index'])->name('payments');
    Route::get('/payments/create', [App\Http\Controllers\PaymentController::class, 'create'])->name('payments.create');
    Route::post('/payments/store', [App\Http\Controllers\PaymentController::class, 'store'])->name('payments.store');

    Route::middleware('isAdmin')->group(function () {

        Route::get('/land/types', [App\Http\Controllers\Admin\LandTypesController::class, 'index'])->name('admins.landTypes');
        Route::get('/land/types/create', [App\Http\Controllers\Admin\LandTypesController::class, 'create'])->name('admins.landtypes.create');
        Route::post('/land/types/store', [App\Http\Controllers\Admin\LandTypesController::class, 'store'])->name('admins.landtypes.store');


        Route::get('/charge/types', [App\Http\Controllers\Admin\ChargeTypesController::class, 'index'])->name('admins.chargeTypes');
        Route::get('/charge/types/create', [App\Http\Controllers\Admin\ChargeTypesController::class, 'create'])->name('admins.chargetypes.create');
        Route::post('/charge/types/store', [App\Http\Controllers\Admin\ChargeTypesController::class, 'store'])->name('admins.chargeTypes.store');
    });
});
