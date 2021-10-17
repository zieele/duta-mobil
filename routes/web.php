<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;    
use App\Http\Controllers\PostController;    
use App\Http\Controllers\CarController;    
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TransactionController;

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

Route::resource('/', Controller::class);
Route::resource('posts', PostController::class);
Route::resource('cars', CarController::class);
Route::resource('customers', CustomerController::class);
Route::resource('transaction', TransactionController::class);