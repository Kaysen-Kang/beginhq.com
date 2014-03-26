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

#contact page

Route::get('/contact', array('as' => 'contact', 'uses' => 'HomeController@welcomeHome'));
Route::post('/contact', array('as' => 'mail', 'uses' => 'MailController@send'));

#publishing system, auth required

#Route::resource('publish', 'PublishController');

Route::group(array('before' => 'oauth'), function()
{
	Route::resource('posts', 'PublishController');
});

#oauth login

Route::get('/logout', array('as' => 'logout', 'uses' => 'OAuthController@logout'));
Route::get('/login', array('as' => 'login', 'uses' => 'OAuthController@login'));
Route::get('/auth/{provider}', 'OAuthController@authorize');
