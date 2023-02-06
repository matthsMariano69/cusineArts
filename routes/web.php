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
        Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
        
        Route::get('employe/create', [App\Http\Controllers\EmployeController::class, 'create'])->name('employe-create');
        Route::post('employe/store', [App\Http\Controllers\EmployeController::class, 'store'])->name('employe-store');
        Route::get('employe/{id}/edit', [App\Http\Controllers\EmployeController::class, 'edit'])->name('employe-edit');
        Route::put('employe/{id}', [App\Http\Controllers\EmployeController::class, 'update'])->name('employe-update');
        Route::delete('employe/{id}', [App\Http\Controllers\EmployeController::class, 'destroy'])->name('employe-destroy');


    });

