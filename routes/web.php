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

Route::get('/patterns/event-channel', [\App\Http\Controllers\PatternsController::class, 'eventChannel'])->name('eventChannel');

Route::get('/patterns/interface-principle', [\App\Http\Controllers\PatternsController::class, 'interfacePrinciple'])->name('interfacePrinciple');

Route::get('/patterns/factory-method', [\App\Http\Controllers\PatternsController::class, 'factoryMethod'])->name('factoryMethod');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
