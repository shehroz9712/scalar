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




Route::name('user.')->group(
    function () {


        Route::get('/', 'HomeController@index')->name('home');
        Route::get('/index', 'HomeController@index')->name('index');
        Route::get('/about', 'HomeController@about')->name('about');
        Route::get('/career', 'HomeController@career')->name('career');
        Route::get('/faq', 'HomeController@faq')->name('faq');

        Route::get('/contact', 'HomeController@contact')->name('contact');
        Route::post('/contact', 'HomeController@submit')->name('contact.submit');
        Route::post('/subscribe', 'HomeController@subscribe')->name('subscribe');

        Route::get('/form', 'HomeController@form')->name('form');

        Route::get('/blogs', 'HomeController@home')->name('blogs');
        // Route::get('/blog/{slug}', 'HomeController@home')->name('blog');
        Route::get('/blog', 'HomeController@home')->name('blog');

        Route::get('/{slug}', 'HomeController@page')->name('page');

        Route::get('/terms', 'ServiceController@terms')->name('terms.terms');
        Route::get('/terms_service', 'ServiceController@terms_service')->name('terms.terms_service');
        Route::get('/privacy', 'homeController@index')->name('pages.privacy');
    }
);
