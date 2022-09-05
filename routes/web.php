<?php

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
    return view('welcome');
});

Route::get('/patterns/propertyContainer', [\App\Http\Controllers\PatternsController::class, 'propertyContainer'])->name('propertyContainer');

Route::get('/patterns/delegation', [\App\Http\Controllers\PatternsController::class, 'delegation'])->name('delegation');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
