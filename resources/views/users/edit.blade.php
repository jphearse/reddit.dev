@extends('layouts.masterInputs')

@section('title', 'Edit')

@section('content')
	<form class="form" method="POST" action="{{ action('UserController@update', $user->id) }}">
		{!! csrf_field() !!}
		{!! method_field('PUT') !!}
		<strong>Name:</strong> <input class="form-control" type="text" name="name" value="{{ old('name')==null ? $user->name : old('name') }}">
		<strong>Email:</strong> <input class="form-control" type="text" name="email" value="{{ old('email')==null ? $user->email : old('email')}}">
        <strong>New Password:</strong> <input class="form-control" type="password" name="password">
        <strong>Confirm Password:</strong> <input class="form-control" type="password" name="password_confirmation">
		<br>
		<input class="btn-success btn" type="submit">
		<a href="{{ action('UserController@edit', $user->id) }}"><button type="button" class="btn btn-danger">Cancel</button></a>
	</form>
@stop