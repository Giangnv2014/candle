<?php

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

Route::get('/approval', 'HomeController@approval')->name('approval');

Route::middleware(['auth'])->group(function () {
    Route::middleware(['approved'])->group(function () {
        Route::get('/home', 'HomeController@index')->name('home');
    });

    Route::middleware(['admin'])->group(function () {
        Route::name('admin.')->group(function () {
            Route::get('/users', 'UserController@index')->name('users.index');
            Route::get('/users/{user_id}/approve', 'UserController@approve')->name('users.approve');

            Route::prefix('admin')->group(function () {
                Route::resource('products', 'ProductController');
            });
        });
    });
});
