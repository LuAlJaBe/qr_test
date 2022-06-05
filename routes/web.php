<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TransportDataController;

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

Route::get('login', LoginController::class);

Route::controller(TransportDataController::class)->group(function () {
    Route::get('transport-data', 'index');
    Route::get('transport-data/{eco}', 'show');
    Route::get('transport-data/load', 'create');
});
