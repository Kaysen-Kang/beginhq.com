@extends('admin.layouts.articles')

@section('content')
	<h2>Display article</h2>

	<h3>{{ $article->title }}</h3>
	<h3>{{ $article->author }}</h3>
	<h5>{{ $article->created_at }}</h5>
	<h5>{{ $article->updated_at }}</h5>
	{{ Markdown::string($article->content) }}

	<hr />
	<a href="{{ URL::route('admin.articles.index') }}">Back to Index</a>
@stop