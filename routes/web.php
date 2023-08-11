<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\CadresController;


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

Route::get('/login', [App\Http\Controllers\LoginController::class, 'index']);

Route::post('/store', [App\Http\Controllers\LoginController::class, 'store'])->name('store');

Route::resource('cadres', 'App\Http\Controllers\CadresController');
Route::get('/cadres', 'App\Http\Controllers\CadresController@index')->name('cadres.index');
Route::get('/index', [App\Http\Controllers\CadresController::class, 'index'])->name('cadres.index');
Route::resource('cadres', 'CadresController');
Route::get('/create', [App\Http\Controllers\CadresController::class, 'create'])->name('cadres.create');
Route::get('/store', [App\Http\Controllers\CadresController::class, 'store'])->name('cadres.store');
Route::get('/edit/{id}', [App\Http\Controllers\CadresController::class, 'edit'])->name('cadres.edit');
Route::get('/create1', [App\Http\Controllers\ProjetController::class,'create'])->name('projet.create');
Route::get('/store', [App\Http\Controllers\ProjetController::class, 'store'])->name('projet.store');

Route::get('/index1', [App\Http\Controllers\ProjetController::class, 'index'])->name('projet.index');


Route::get('/create1', function () {
    return view('projet.create');
});

Route::post('/create1', function () {
    return view('projet.create');
});


Route::get('/index1', function () {
    return view('projet.index');
});

Route::post('/index1', function () {
    return view('projet.index');
});