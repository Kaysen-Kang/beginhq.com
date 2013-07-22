@extends('publish.base')

@section('intro')
	<span>NO</span>
@stop

@section('main')
	<h2 class="section">OAuth</h2>

	<article>

		<span class="notice">{{ Notification::showAll() }}</span>
	
		<div class="content">

			<p>
				{{ HTML::link('/auth/google', 'Sign-in with Google') }}
			</p>

		</div>

	</article>
@stop