@extends('emails.mail')

@section('content')
	<div id="send-mail" class="send-mail">
		{{ Form::open(array('route' => 'mail.send')) }}

		<div class="control-group">
			{{ Form::label('name', 'Name') }}
			<div class="controls">
				{{ Form::text('name') }}
				{{ $errors->first('name') }}
			</div>
		</div>

		<div class="control-group">
			{{ Form::label('email', 'Email Address') }}
			<div class="controls">
				{{ Form::text('email') }}
				{{ $errors->first('email') }}
			</div>
		</div>

		<div class="control-group">
			{{ Form::label('telephone', 'Telephone Numbe') }}
			<div class="controls">
				{{ Form::text('telephone') }}
				{{ $errors->first('telephone') }}
			</div>
		</div>

		<div class="control-group">
			{{ Form::label('comments', 'Comments') }}
			<div class="controls">
				{{ Form::textarea('comments')}}
				{{ $errors->first('comments') }}
			</div>
		</div>

		<div class="form-actions">
			{{ Form::submit('Send', array('class'=>'btn btn-success btn-send btn-larg')) }}
		</div>

		{{ Form::close() }}

	</div>
@stop