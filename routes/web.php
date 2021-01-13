<?php

use App\Http\Controllers\AgenciesController;
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

Route::prefix('agency')->group(function (){
    Route::get('/',[AgenciesController::class,'index'])->name('agency.index');
    Route::get('/add',[AgenciesController::class,'create'])->name('agency.create');
    Route::post('/add',[AgenciesController::class,'store'])->name('agency.store');
    Route::get('/edit/{id}',[AgenciesController::class,'edit'])->name('agency.edit');
    Route::post('/edit/{id}',[AgenciesController::class,'update'])->name('agency.update');
    Route::get('/delete/{id}',[AgenciesController::class,'destroy'])->name('agency.delete');
    Route::get('/search',[AgenciesController::class,'search'])->name('agency.search');
    Route::post('/search',[AgenciesController::class,'getAgenciesSearch'])->name('agency.getAgenciesSearch');
});
