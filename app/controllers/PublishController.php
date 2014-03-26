<?php

use App\Models\Article;

class PublishController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('publish.index')->with('articles', Article::all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('publish.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
			'title'		=> 'required',
			'author'	=> 'required',
			'content'	=> 'required|min:50'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails())
		{
			return Redirect::route('posts.create')->withInput()->withErrors($validator);
		}

		$article = new Article;
		$article->title = Input::get('title');
		$article->author = Input::get('author');
		$article->content = Input::get('content');
		$article->save();

		Notification::success("The article '$article->title' was saved.");

		return Redirect::route('posts.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return View::make('publish.show')->with('article', Article::find($id));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return View::make('publish.edit')->with('article', Article::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array(
			'title'		=> 'required',
			'author'	=> 'required',
			'content'	=> 'required|min:50',
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails())
		{
			return Redirect::route('posts.create')->withInput()->withErrors($validator);
		}

		$article = Article::find($id);
		$article->title = Input::get('title');
		$article->author = Input::get('author');
		$article->content = Input::get('content');
		$article->save();

		Notification::success("The article '$article->title' was saved.");

		return Redirect::route('posts.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$article = Article::find($id);
		$article->delete();

		Notification::success("The article was delete.");

		return Redirect::route('posts.index');
	}

}