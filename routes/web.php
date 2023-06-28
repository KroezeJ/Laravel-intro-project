<?php

use App\Http\Controllers\PlanetController;
use App\Http\Controllers\SolarSystemController;
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
Route::get('/', [PlanetController::class, 'index']);
Route::get('/planets', [PlanetController::class, 'index']);
Route::get('/planets/{planet}', [PlanetController::class, 'show']);
Route::get('/solarsystems', [SolarSystemController::class, 'index']);
Route::get('/solarsystems/{solarsystem}', [SolarSystemController::class, 'show']);



