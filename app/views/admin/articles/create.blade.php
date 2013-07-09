@extends('admin.layouts.articles')

@section('content')
	<div id="create-article" class="create-article">
		{{ Form::open(array('route' => 'admin.articles.store')) }}

		<div class="control-group">
			{{ Form::label('title', 'Title') }}
			<div class="controls">
				{{ Form::text('title') }}
				{{ $errors->first('title') }}
			</div>
		</div>

		<div class="control-group">
			{{ Form::label('author', 'Author') }}
			<div class="controls">
				{{ Form::text('author')}}
				{{ $errors->first('author') }}
			</div>
		</div>

		<div class="control-group">
			{{ Form::label('content', 'Content') }}
			<div class="controls">
				{{ Form::textarea('content')}}
				{{ $errors->first('content') }}
			</div>
		</div>

		<div class="form-actions">
			{{ Form::submit('Create', array('class'=>'btn btn-success btn-save btn-larg')) }}
			<a href="{{ URL::route('admin.articles.index') }}" class="btn btn-large">Cancel</a>
		</div>

		{{ Form::close() }}
	</div>
@stop