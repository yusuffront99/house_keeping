<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HouseKeepingController;
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
    Route::get('', [HomeController::class, 'home'])->name('home');
    Route::get('/print', [HomeController::class, 'print'])->name('print');
    // Route::post('/store', [HomeController::class, 'store'])->name('home.store');

    Route::resource('house_keeping', HouseKeepingController::class);
    // WEEKLY I
    Route::get('/weekly1', [WeeklyController1::class, 'index'])->name('weekly1.index');
    Route::get('/weekly1/{id}/edit', [WeeklyController1::class, 'edit'])->name('weekly1.edit');
    Route::put('/weekly1/{id}', [WeeklyController1::class, 'update'])->name('weekly1.update');
    Route::post('/weekly1/store', [WeeklyController1::class, 'store'])->name('weekly1.store');

    // WEEKLY II
    Route::get('/weekly2', [WeeklyController2::class, 'index'])->name('weekly2.index');
    Route::get('/weekly2/{id}/edit', [WeeklyController2::class, 'edit'])->name('weekly2.edit');
    Route::put('/weekly2/{id}', [WeeklyController2::class, 'update'])->name('weekly2.update');
    Route::post('/weekly2/store', [WeeklyController2::class, 'store'])->name('weekly2.store');

    // WEEKLY III
    Route::get('/weekly3', [WeeklyController3::class, 'index'])->name('weekly3.index');
    Route::get('/weekly3/{id}/edit', [WeeklyController3::class, 'edit'])->name('weekly3.edit');
    Route::put('/weekly3/{id}', [WeeklyController3::class, 'update'])->name('weekly3.update');
    Route::post('/weekly3/store', [WeeklyController3::class, 'store'])->name('weekly3.store');

    // WEEKLY IV
    Route::get('/weekly4', [WeeklyController4::class, 'index'])->name('weekly4.index');
    Route::get('/weekly4/{id}/edit', [WeeklyController4::class, 'edit'])->name('weekly4.edit');
    Route::put('/weekly4/{id}', [WeeklyController4::class, 'update'])->name('weekly4.update');
    Route::post('/weekly4/store', [WeeklyController4::class, 'store'])->name('weekly4.store');
});


