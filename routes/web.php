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
    Route::group([ 'prefix' => 'admin', 'middleware' => ['auth', 'verified']], function () {
        Route::get('/', \App\Http\Controllers\Admin\IndexController::class)->name('admin.index');
        Route::group(['prefix' => 'fertilizers'], function () {
            Route::get('/trash', \App\Http\Controllers\Admin\Fertilizers\TrashController::class)->name('admin.trash');
            Route::get('/', \App\Http\Controllers\Admin\Fertilizers\IndexController::class)->name('admin.fertilizers.index');
            Route::get('/create', \App\Http\Controllers\Admin\Fertilizers\CreateController::class)->name('admin.fertilizers.create');
            Route::post('/store', \App\Http\Controllers\Admin\Fertilizers\StoreController::class)->name('admin.fertilizers.store');
            Route::get('/{fertilizer}/edit', \App\Http\Controllers\Admin\Fertilizers\EditController::class)->name('admin.fertilizers.edit');
            Route::patch('/update/{fertilizer}', \App\Http\Controllers\Admin\Fertilizers\UpdateController::class)->name('admin.fertilizers.update');
            Route::get('/{fertilizer}', \App\Http\Controllers\Admin\Fertilizers\ShowController::class)->name('admin.fertilizers.show');
            Route::delete('/{fertilizer}', \App\Http\Controllers\Admin\Fertilizers\DeleteController::class)->name('admin.fertilizers.delete');

        });
        Route::group(['prefix' => 'culture'], function () {
            Route::get('/', \App\Http\Controllers\Admin\Cultures\IndexController::class)->name('admin.cultures.index');
            Route::get('/create', \App\Http\Controllers\Admin\Cultures\CreateController::class)->name('admin.cultures.create');
            Route::post('/store', \App\Http\Controllers\Admin\Cultures\StoreController::class)->name('admin.cultures.store');
            Route::get('/{culture}/edit', \App\Http\Controllers\Admin\Cultures\EditController::class)->name('admin.cultures.edit');
            Route::patch('/update/{culture}', \App\Http\Controllers\Admin\Cultures\UpdateController::class)->name('admin.cultures.update');
            Route::get('/{culture}', \App\Http\Controllers\Admin\Cultures\ShowController::class)->name('admin.cultures.show');
            Route::delete('/{culture}', \App\Http\Controllers\Admin\Cultures\DeleteController::class)->name('admin.cultures.delete');
        });
        Route::group(['prefix' => 'clients'], function () {
            Route::get('/', \App\Http\Controllers\Admin\Clients\IndexController::class)->name('admin.clients.index');
            Route::get('/create', \App\Http\Controllers\Admin\Clients\CreateController::class)->name('admin.clients.create');
            Route::post('/store', \App\Http\Controllers\Admin\Clients\StoreController::class)->name('admin.clients.store');
            Route::get('/{client}/edit', \App\Http\Controllers\Admin\Clients\EditController::class)->name('admin.clients.edit');
            Route::patch('/update/{client}', \App\Http\Controllers\Admin\Clients\UpdateController::class)->name('admin.clients.update');
            Route::get('/{client}', \App\Http\Controllers\Admin\Clients\ShowController::class)->name('admin.clients.show');
            Route::delete('/{client}', \App\Http\Controllers\Admin\Clients\DeleteController::class)->name('admin.clients.delete');
        });
        Route::group(['prefix'=>'users'], function () {
            Route::get('/', '\App\Http\Controllers\Admin\User\IndexController')->name('admin.user.index');
            Route::get('/create', '\App\Http\Controllers\Admin\User\CreateController')->name('admin.user.create');
            Route::post('/', '\App\Http\Controllers\Admin\User\StoreController')->name('admin.user.store');
            Route::get('/{user}', '\App\Http\Controllers\Admin\User\ShowController')->name('admin.user.show');
            Route::get('/{user}/edit', '\App\Http\Controllers\Admin\User\EditController')->name('admin.user.edit');
            Route::patch('/{user}', '\App\Http\Controllers\Admin\User\UpdateController')->name('admin.user.update');
            Route::delete('/{user}', '\App\Http\Controllers\Admin\User\DeleteController')->name('admin.user.delete');
        });

    });


Auth::routes();


