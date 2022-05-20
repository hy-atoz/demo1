<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::resource('employee', EmployeeController::class);
Auth::routes();

Route::controller(HomeController::class)->group(function () {
    Route::get('/index', 'index')->name('index');
    Route::get('/index2', 'index2')->name('index2');
    Route::get('/index3', 'index3')->name('index3');
});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
