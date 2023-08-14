<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\WeeklyController1;
use App\Http\Controllers\WeeklyController2;
use App\Http\Controllers\WeeklyController3;
use App\Http\Controllers\WeeklyController4;
use App\Models\HouseKeeping;
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

Route::prefix('/home')->group(function(){
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/print', [HomeController::class, 'print'])->name('print');
    // WEEKLY I
    Route::get('/weekly1', [WeeklyController1::class, 'index'])->name('weekly1.index');
    Route::post('/weekly1/store', [WeeklyController1::class, 'store'])->name('weekly1.store');

    // WEEKLY II
    Route::get('/weekly2', [WeeklyController2::class, 'index'])->name('weekly2.index');
    Route::post('/weekly2/store', [WeeklyController2::class, 'store'])->name('weekly2.store');

    // WEEKLY III
    Route::get('/weekly3', [WeeklyController3::class, 'index'])->name('weekly3.index');
    Route::post('/weekly3/store', [WeeklyController3::class, 'store'])->name('weekly3.store');

    // WEEKLY IV
    Route::get('/weekly4', [WeeklyController4::class, 'index'])->name('weekly4.index');
    Route::post('/weekly4/store', [WeeklyController4::class, 'store'])->name('weekly4.store');
});


