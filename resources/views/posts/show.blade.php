@extends('layouts.masterInputs')

@section('title', 'Post')

@section('content')
	{{-- <table class="table">
	<thead>
	<tr>
		<th>ID</th>
	    <th>Title</th>
	    <th>Content</th> 
	    <th>URL</th>
  	</tr>
	</thead>
	<tbody>
	<tr>
		<td>{{ $posts->id }}</td>
		<td>{{ $posts->title }}</td>
		<td>{{ $posts->content }}</td>
		<td>{{ $posts->url }}</td>
	</tr>
	</tbody>
	</table> --}}


	<h1>{{ $posts->title }}</h1>
		<h5><a href="{{ $posts->url }}" target="_blank">{{ $posts->url }}</a></h5>
		<h5>Created on: {{ $posts->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}</h5>
		<p>{{ $posts->content }}</p>


		<form class="form" method="POST" action="{{ action('PostsController@update', $posts->id) }}">
				{!! csrf_field() !!}
				{!! method_field('DELETE') !!}
				<a href="/posts/{{ $posts->id }}/edit"><button type="button" class="btn btn-info">Edit</button></a>
				<button role="button" class="btn btn-danger">Delete</button>
		</form>
@stop
