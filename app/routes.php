<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

#mostly static external-facing paging

Route::get('/', 'HomeController@welcomeHome');
Route::get('/home', 'HomeController@welcomeHome');
Route::get('/team', 'HomeController@welcomeHome');
Route::get('/project', 'HomeController@welcomeHome');
Route::get('/contact', 'HomeController@welcomeHome');

#publishing system, auth required

Route::group(array('before' => 'oauth'), function()
{
	Route::resource('publish', 'publishController');
});

#oauth login

Route::get('/logout', array('as' => 'logout', 'uses' => 'OAuthController@logout'));
Route::get('/login', array('as' => 'login', 'uses' => 'OAuthController@login'));
Route::get('/auth/{provider}', 'OAuthController@authorize');

/*

#oauth login (old)

Route::get('admin/logout', array('as' => 'admin.logout', 'uses' => 'App\Controllers\Admin\AuthController@getLogout'));
Route::get('admin/login', array('as' => 'admin.login', 'uses' => 'App\Controllers\Admin\AuthController@getLogin'));
Route::get('admin/auth/{provider}', 'App\Controllers\Admin\AuthController@actionSession');

*/


/*

#mail contact

Route::get('mail/send', 'Mailcontroller@getSend');
Route::post('mail/send', array('as' => 'mail.send', 'uses' => "Mailcontroller@sendMail"));

*/
