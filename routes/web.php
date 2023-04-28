<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OSRSController;

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
    return view('index');
});

Route::get('/cv', function () {
    return view('cv');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/osrsbotplanner', [OSRSController::class, 'planned'])->name('osrsbotplanner');
