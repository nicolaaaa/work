<?php

use App\Http\Controllers\VermittlungenController;
use App\Http\Controllers\NutzerController;

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
    return view('home');
});


Route::get('/vermittlungen', [VermittlungenController::class, 'index'])->name('vermittlungen');
Route::post('/vermittlungen', [VermittlungenController::class, 'store']);

Route::get('/nutzer', [NutzerController::class, 'index'])->name('nutzer');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
