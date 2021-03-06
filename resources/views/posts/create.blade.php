@extends('layouts.masterInputs')

@section('title', 'Create')

@section('content')
	<form class="form" method="POST" action="{{ action('PostsController@store') }}">
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
		<strong>Title:</strong> <input class="form-control" type="text" name="title" value="{{ old('title') }}">
		<strong>Url:</strong> <input class="form-control" type="text" name="url" value="{{ old('url') }}">
		<strong>Content:</strong> <textarea class="form-control" type="text" name="content" rows="5" value="{{ old('content') }}"></textarea>
		<br>
		<input class="btn-success btn" type="submit">

		<a href="/posts"><button type="button" class="btn btn-danger">Cancel</button></a>
	</form>
@stop