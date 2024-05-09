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

            Route::get('/', function () {
                return view('admin.dashboard');
            });
            Route::get('/dashboard', function () {
                return view('admin.dashboard');
            });


            Route::get('/admin', function () {
                return view('admin.dashboard');
            })->name('index');
        });
    }
);
