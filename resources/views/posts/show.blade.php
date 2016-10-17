@extends('layouts.masterInputs')

@section('title', 'Post')

@section('content')
	<h1>{{ $posts->title }}</h1>
	<h4>Created by: {{ $posts->created_by }}</h4>
		<h5><a href="http://{{ $posts->url }}" target="_blank">{{ $posts->url }}</a></h5>
		<h5>Created on: {{ $posts->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}</h5>
	<hr>
		<p>{{ $posts->content }}</p>

	@if(Auth::id() == $posts->created_by)
		<form class="form" method="POST" action="{{ action('PostsController@update', $posts->id) }}">
				{!! csrf_field() !!}
				{!! method_field('DELETE') !!}
				<a href="/posts"><button type="button" class="btn btn-info">Home <i class="fa fa-home"></i></button></a>
				<a href="/posts/{{ $posts->id }}/edit"><button type="button" class="btn btn-warning">Edit <i class="fa fa-pencil"></i></button></a>
				<button role="button" class="btn btn-danger">Delete <i class="fa fa-trash-o"></i></button>
		</form>
	@endif
@stop
