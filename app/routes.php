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

Route::get('/', function()
{
    return 'root';
});

Route::get('/home', 'HomeController@welcomeHome');
Route::get('/team', 'HomeController@welcomeHome');


Route::get('/project', function()
{
    return 'project';
});

Route::get('/contact', function()
{
    return 'contact';
});

#admin login

Route::get('admin/logout', array('as' => 'admin.logout', 'uses' => 'App\Controllers\Admin\AuthController@getLogout'));
Route::get('admin/auth/{provider}', 'App\Controllers\Admin\AuthController@actionSession');
Route::get('admin/login', array('as' => 'admin.login', 'uses' => 'App\Controllers\Admin\AuthController@getLogin'));
Route::group(array('prefix' => 'admin', 'before' => 'auth.admin'), function()
{
	Route::any('/', 'App\Controllers\Admin\ArticlesController@index');
	Route::resource('articles', "App\Controllers\Admin\ArticlesController");
});

#email contact

Route::get('mail/send', 'Mailcontroller@getSend');
Route::post('mail/send', array('as' => 'mail.send', 'uses' => "Mailcontroller@sendMail"));
