<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CalculatorIMCController;
//use App\Http\Controllers\EventController;


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

Route::get('/event/{id}', function ($id) {
    return 'cualquier texto '.$id;
});

Route::get('/events/{id}', [EventController::class, 'show']);

Route::get('/imc/{w}/{h}', [CalculatorIMCController::class, 'create']);

Route::resource('products', EventController::class);

//Route::resource('events', EventController::class);
