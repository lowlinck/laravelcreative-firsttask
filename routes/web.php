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

Route::get('/', \App\Http\Controllers\Main\IndexController::class)->name('main.index');
    Route::group([ 'prefix' => 'admin', 'middlewarte' => ['auth','admin', 'verified']], function () {
        Route::get('/', \App\Http\Controllers\Admin\IndexController::class)->name('admin.index');
    });

Auth::routes();


