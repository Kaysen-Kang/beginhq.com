@extends('publish.base')

@section('intro')
	<span>YES</span>
@stop

@section('main')
	<h2 class="section">Create a new Post</h2>

	<article>
	
		<div class="content">
			<div id="publish-article" class="publish-article">
				{{ Form::open(array('route' => 'posts.store')) }}

				<div class="control-group">
					{{ Form::label('title', 'Title') }}
					<div class="controls">
						{{ Form::text('title') }}
						<span class="error">{{ $errors->first('title') }}</span>
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('author', 'Author') }}
					<div class="controls">
						{{ Form::text('author')}}
						<span class="error">{{ $errors->first('author') }}</span>
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('content', 'Content') }}
					<div class="controls">
						{{ Form::textarea('content')}}
						<span class="error">{{ $errors->first('content') }}</span>
					</div>
				</div>

				<div class="form-actions">
					{{ Form::submit('Create', array('class'=>'btn btn-success btn-save btn-larg')) }}
					<a href="{{ URL::route('posts.index') }}" class="cancel btn btn-large">Cancel</a>
				</div>

				{{ Form::close() }}
			</div>
		</div>

	</article>
@stop