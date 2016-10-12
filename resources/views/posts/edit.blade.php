@extends('layouts.masterInputs')

@section('content')
	<form class="form" method="POST" action="{{ action('PostsController@update', 1) }}">
		{!! csrf_field() !!}
		{!! method_field('PUT') !!}
		Title: <input class="form-control" type="text" name="title" value="{{ old('title') }}">
		Content: <input class="form-control" type="text" name="content" value="{{ old('content') }}">
		Url: <input class="form-control" type="text" name="url" value="{{ old('url') }}">
		<input class="btn-success btn" type="submit">
	</form>
@stop