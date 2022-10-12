<?php

use App\Http\Controllers\LandingController;
use App\Models\Clubs;
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
    return view('pages.landing-page.index');
});

Route::get('/clubs', [LandingController::class, 'clubs'])->name('clubs');

Route::get('/managers', [LandingController::class, 'managers'])->name('managers');

Route::get('/players', [LandingController::class, 'players'])->name('players');

Route::get('/stadiums', [LandingController::class, 'stadiums'])->name('stadiums');
