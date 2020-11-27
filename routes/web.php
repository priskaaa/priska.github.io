<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\OutcomeController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\TestController;


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
    return view('pages.home');
    // return redirect()->route('data.index'); 
});

Route::middleware(['auth:sanctum'])->group(function () {
    // Route::resource('dashboard', DashboardController::class);
    Route::resource('data',DataController::class);
    Route::get('/cetak_pdf',[DataController::class,'cetak_pdf'])->name('cetak_pdf');
    Route::resource('income', IncomeController::class);
    Route::get('/outcome',[OutcomeController::class,'index'])->name('outcome.index');
    Route::get('/cetak',[OutcomeController::class,'cetak']);
    Route::put('/outcome/{id}',[OutcomeController::class,'update'])->name('outcome.update');
    Route::put('/income/{id}/ubah',[IncomeController::class,'ubah'])->name('income.ubah');
    Route::put('/income/{id}/show',[IncomeController::class,'ubah'])->name('income.show');
    Route::get('/income/{id}/edit',[IncomeController::class,'ubah'])->name('income.edit');  
});




Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//     Route::middleware(['auth:sanctum', 'verified'])->
//         get('/dashboard', function () {
//         return view('dashboard');

//     })->name('dashboard');
