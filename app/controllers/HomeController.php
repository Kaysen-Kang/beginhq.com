<?php

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

		//make home as default
		if(!$route[1])
			$route[1] = 'home';

		$data = [];
		$data['route'] = $route[1];

		return View::make('home.'.$route[1], $data);
	}

}