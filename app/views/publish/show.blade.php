@extends('publish.base')

@section('main')
	<h2 class="section">Publish</h2>

	<article>
		<header>
			<h2 class="title">{{ $article->title }}</h2>
			<span class="date">{{ $article->date }}</span>
		</header>

		<div class="content">
			{{ $article->content }}
		</div>
	</article>
@stop