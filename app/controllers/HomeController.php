<?php

use App\Models\Article;

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function welcomeHome()
	{
		$route = explode(' /', Route::currentRouteName());

		$data = [];
		$data['route'] = $route[1];

		//make home as default
		if(!$data['route'])
			$data['route'] = 'home';

		//at home, show articles
		if($data['route'] == 'home') {

			$news = Article::all();
			$data['news'] = $news;

		}

		return View::make('home.'.$data['route'], $data);
	}

}