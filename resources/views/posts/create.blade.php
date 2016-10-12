@extends('layouts.masterInputs')

@section('content')
	<form class="form" method="POST" action="{{ action('PostsController@store') }}">
		{!! csrf_field() !!}
		Title: <input class="form-control" type="text" name="title" value="{{ old('title') }}">
		Content: <input class="form-control" type="text" name="content" value="{{ old('content') }}">
		Url: <input class="form-control" type="text" name="url" value="{{ old('url') }}">
		<input class="btn-success btn" type="submit">
	</form>
@stop