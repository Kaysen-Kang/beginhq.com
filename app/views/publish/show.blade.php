@extends('publish.base')

@section('intro')
	<span>YES</span>
@stop

@section('main')
	<h2 class="section">Publish</h2>

	<article>
		<header>
			<h2 class="title">{{ $article->title }}</h2>
			<span class="date">{{ $article->timestamp }}</span>
		</header>

		<div class="content">
			{{ Markdown::string($article->content) }}
		</div>
	</article>
@stop