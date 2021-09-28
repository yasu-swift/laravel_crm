<?php

use App\Http\Controllers\CustomerController;
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

// Route::get('/customers/search', function () {
//     return view('customers.search');
// });
Route::get('/customers/search', [CustomerController::class, 'search']);

Route::resource('customers', CustomerController::class);
// Route::get('/customers/search', [App\Http\Controllers\CustomerController::class, 'search']);

// Route::resource('/customers', App\Http\Controllers\ZipcodeController::class);
