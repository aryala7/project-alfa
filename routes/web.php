<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/','HomeController@MainPage')->name('mainPage');
Route::post('/contact','HomeController@send')->name('contact');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Confirm Password (added in v6.2)
Route::get('password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
Route::post('password/confirm', 'Auth\ConfirmPasswordController@confirm');

// Email Verification Routes...
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify'); // v6.x
/* Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify'); // v5.x */
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

Route::get('/home', 'HomeController@index')->name('home');
Route::group([
    'prefix' => 'admin',
    'middleware'=>'auth'
], function () {
    Route::get('/dashboard', function () {
        return view('panel.dashboard');
        
    });
        Route::get('inbox','HomeController@inbox')->name('inbox');
        Route::group(['prefix' => 'blog'], function () {
            Route::get('/','BlogController@index')->name('blog.index');
            Route::get('/new','BlogController@create')->name('blog.new');
            Route::post('/new','BlogController@save')->name('blog.save');
            Route::get('{id}/edit','BlogController@edit')->name('blog.edit');
            Route::post('{id}/edit','BlogController@update')->name('blog.update');
            
        });
        Route::group(['prefix' => 'info'], function () {
        Route::get('/','HomeController@PersonalInfo')->name('personal.info');
        // Route::get('{id}','HomeController@editUser')->name('info.edit');
        Route::post('/','HomeController@updatePersonalInfo')->name('info.update');
        Route::get('/resume','HomeController@resume')->name('info.resume');
        Route::post('/resume','HomeController@saveResume')->name('info.resume.save');
        
    });
    
});
Route::post('/1372300109:AAHnwKZBUCNEXe3nzIskV5cSYSUv1E_PgRg/webhook','TelegramController@sendMessage');
Route::post('/start','TelegramController@sendMessage');

// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');