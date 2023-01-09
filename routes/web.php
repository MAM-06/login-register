<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PasswordController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/password', [App\Http\Controllers\PasswordController::class, 'edit'])->name('password');
// Route::get('/password', [App\Http\Controllers\PasswordController::class, 'user.password.edit'])->name('password');
// Route::get('/password', [App\Http\Controllers\PasswordController::class, 'user.password.update'])->name('password');

Route::get('password', 'PasswordController@edit')
    ->name('user.password.edit');

Route::patch('password', 'PasswordController@update')
    ->name('user.password.update');
Route::group(['middleware' => 'auth'], function () {
    Route::get('password', 'PasswordController@edit')->name('user.password.edit');
});
