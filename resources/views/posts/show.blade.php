@extends('layouts.masterInputs')

@section('title', 'Post')

@section('content')
	<h1>{{ $posts->title }}</h1>
		<h5><a href="{{ $posts->url }}" target="_blank">{{ $posts->url }}</a></h5>
		<h5>Created on: {{ $posts->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}</h5>
		<p>{{ $posts->content }}</p>


		<form class="form" method="POST" action="{{ action('PostsController@update', $posts->id) }}">
				{!! csrf_field() !!}
				{!! method_field('DELETE') !!}
				<a href="/posts"><button type="button" class="btn btn-info">Home</button></a>
				<a href="/posts/{{ $posts->id }}/edit"><button type="button" class="btn btn-warning">Edit</button></a>
				<button role="button" class="btn btn-danger">Delete</button>
		</form>
@stop
