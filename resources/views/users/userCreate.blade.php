@extends('layouts.masterInputs')

@section('title', 'User')

@section('content')
	<form class="form" method="POST" action="{{ action('UserController@store') }}">
		{!! csrf_field() !!}
			@if($errors->has('title') || $errors->has('content') || $errors->has('url'))
                <div class="alert alert-danger">
                    @if($errors->has('title'))
                    	{{ $errors->first('title') }}<br>
                    @endif
                    @if($errors->has('content'))
                   		{{ $errors->first('content') }}<br>
                    @endif
                    @if($errors->has('url'))
                    	{{ $errors->first('url') }}
                    @endif
                </div>
            @endif
		<strong>Name:</strong> <input class="form-control" type="text" name="name" value="{{ old('name') }}">
		<strong>Email:</strong> <input class="form-control" type="text" name="email" value="{{ old('email') }}">
		<strong>Password:</strong> <input class="form-control" type="text" name="password" value="{{ old('content') }}"></input>
		<br>
		<input class="btn-success btn" type="submit">

		<a href="/posts"><button type="button" class="btn btn-danger">Cancel</button></a>
	</form>
@stop