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
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
    Route::group(['middleware' => ['auth']], function(){
        Route::get('home', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
        Route::get('employe/create', [App\Http\Controllers\EmployeController::class, 'create'])->name('employe-create');
        Route::post('employe/store', [App\Http\Controllers\EmployeController::class, 'store'])->name('employe-store');

    });

