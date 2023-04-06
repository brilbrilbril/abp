<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
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


Route::get('/tes', function () {
    return view('tes');
});

Route::get('/home', function () {
    return view('coba');
});

#Route::get('/event', function () {
 #   return view('event');
#});

Route::get('event', [EventController::class, 'index']);

