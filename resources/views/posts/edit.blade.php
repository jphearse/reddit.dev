@extends('layouts.masterInputs')

@section('title', 'Edit')

@section('content')
	<form class="form" method="POST" action="{{ action('PostsController@update', $post->id) }}">
		{!! csrf_field() !!}
		{!! method_field('PUT') !!}
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
		<strong>Title:</strong> <input class="form-control" type="text" name="title" value="{{ old('title')==null ? $post->title : old('title') }}">
		<strong>Url:</strong> <input class="form-control" type="text" name="url" value="{{ old('url')==null ? $post->url : old('url')}}">
		<strong>Content:</strong> <input class="form-control" type="text" name="content" value="{{ old('content') ==null? $post->content : old('content')}}">
		<br>
		<input class="btn-success btn" type="submit">
		<a href="{{ action('PostsController@edit', $post->id) }}"><button type="button" class="btn btn-danger">Cancel</button></a>
	</form>
@stop