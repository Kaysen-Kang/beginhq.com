@extends('home.main')

@section('intro')
	<p>We love to hear your feedbacks &amp; suggestions: <br><span>Chime in using this form</span>.</p>
@stop

@section('subtitle')
	<h2 class="section">Contact Form</h2>
@stop

@section('static')
	<article>
		<div class="content">
			
			{{ Form::open(array('route' => 'mail')) }}

			<div class="control-group">
				{{ Form::label('name', 'Name') }}
				<div class="controls">
					{{ Form::text('name') }}
					<span class="error">{{ $errors->first('name') }}</span>
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('email', 'Email Address') }}
				<div class="controls">
					{{ Form::text('email') }}
					<span class="error">{{ $errors->first('email') }}</span>
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
				{{ Form::submit('Send', array('class'=>'btn btn-success btn-send btn-larg')) }}
			</div>

			{{ Form::close() }}

		</div>
	</article>
@stop