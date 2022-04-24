<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DisquerasController;
use App\Http\Controllers\GenerosController;
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

/*Route::get('/disqueras', function () {
    return view('disqueras.index');
});*/

Route::resource('disqueras',DisquerasController::class);


Route::resource('generos',GenerosController::class);








Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
