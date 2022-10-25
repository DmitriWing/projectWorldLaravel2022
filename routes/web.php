<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CityController;
//use App\Models\Country;

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
    return view('start');
});

// countries
Route::get('/countries', [CountryController::class, 'index']);
Route::get('/detail/{country}', [CountryController::class, 'show']);

// cities
Route::get('/cities', [CityController::class, 'index']);

// search
Route::get('/search/', [CountryController::class, 'search'])->name('search');

// countries by continent
Route::get('/continent', [CountryController::class, 'listContinent']);
Route::get('/continentCountry/{continent}', [CountryController::class, 'countryByContinent']);
