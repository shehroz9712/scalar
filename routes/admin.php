<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::name('admin.')->group(
    function () {


        route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
        route::post('login', 'Auth\LoginController@login')->name('login');

        Route::middleware('admin.auth')->group(function () {

            Route::get('/', 'DashboardController@index');
            Route::get('/dashboard', 'DashboardController@index');
            Route::get('/admin', 'DashboardController@index')->name('index');

            Route::resource('/admins', 'AdminController');
            // Route::resource('/pages', 'PageController@index');
            Route::get('/forms/index', 'DashboardController@index')->name('forms.index');
            Route::get('forms/{id}', 'FormController@show')->name('forms.show');
        });
    }
);
