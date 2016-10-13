@extends('layouts.masterInputs')

@section('title', 'Edit')

@section('content')
	<form class="form" method="POST" action="{{ action('PostsController@update', $post->id) }}">
		{!! csrf_field() !!}
		{!! method_field('PUT') !!}
		Title: <input class="form-control" type="text" name="title" value="{{ old('title')==null ? $post->title : old('title') }}">
		Content: <input class="form-control" type="text" name="content" value="{{ old('content') ==null? $post->content : old('content')}}">
		Url: <input class="form-control" type="text" name="url" value="{{ old('url')==null ? $post->url : old('url')}}">
		<input class="btn-success btn" type="submit">
		<a href="/posts/{{ $post->id }}"><button type="button" class="btn btn-danger">Cancel</button></a>
	</form>
@stop