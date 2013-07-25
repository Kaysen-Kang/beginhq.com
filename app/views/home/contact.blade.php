@extends('home.main')

@section('intro')
	<p>We love to hear your feedbacks &amp; suggestions: <br><span>Chime in</span>.</p>
@stop

@section('subtitle')
	<h2 class="section">Contact Form</h2>
@stop

@section('static')
	<article>
		<div class="content">
			
			{{ Form::open(array('route' => 'mail', 'class' => 'contact')) }}

			<div class="col2">
				{{ Form::label('name', 'Your Name') }}
				<div class="controls">
					{{ Form::text('name') }}
					<span class="error">{{ $errors->first('name') }}</span>
				</div>
			</div>

			<div class="col2">
				{{ Form::label('email', 'Email Address') }}
				<div class="controls">
					{{ Form::email('email') }}
					<span class="error">{{ $errors->first('email') }}</span>
				</div>
			</div>

			<div class="col1">
				{{ Form::label('content', 'Message') }}
				<div class="controls">
					{{ Form::textarea('content')}}
					<span class="error">{{ $errors->first('content') }}</span>
				</div>
			</div>

			<div class="col1">
				{{ Form::submit('Send', array('class'=>'btn btn-success btn-send btn-larg')) }}
				<p>We will get back to you within 2 business days.</p>
			</div>

			{{ Form::close() }}

		</div>
	</article>
@stop