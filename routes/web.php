<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CashflowController;
use App\Http\Controllers\InsightsController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::controller(CashflowController::class)->group(function () {
    Route::get('/cashflow', 'index');
    Route::post('/cashflow', 'store');
});

Route::controller(InsightsController::class)->group(function () {
    Route::get('/insights', 'index');
});