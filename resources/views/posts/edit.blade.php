@extends('layouts.masterInputs')

@section('content')
	<form class="form" method="POST" action="{{ action('PostsController@update', $post->id) }}">
		{!! csrf_field() !!}
		{!! method_field('PUT') !!}
		Title: <input class="form-control" type="text" name="title" value="{{ old('title')==null ? $post->title : old('title') }}">
		Content: <input class="form-control" type="text" name="content" value="{{ old('content') ==null? $post->content : old('content')}}">
		Url: <input class="form-control" type="text" name="url" value="{{ old('url')==null ? $post->url : old('url')}}">
		<input class="btn-success btn" type="submit">
	</form>
@stop