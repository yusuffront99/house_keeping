<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\WeeklyController1;
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
    // WEEKLY III
    // WEEKLY IV
});


