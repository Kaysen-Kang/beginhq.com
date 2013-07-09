@extends('admin.layouts.auth')

@section('content')
	
	<div> {{ Notification::showAll() }}</div>
	<div>
		{{ HTML::link('admin/auth/google', 'Sign-in with Google') }}
	</div>
@stop