@extends('layouts.masterInputs')

@section('posts')
	<table class="table">
	<thead>
	<tr>
		<th>ID</th>
	    <th>Title</th>
	    <th>Content</th> 
	    <th>URL</th>
  	</tr>
	</thead>
	<tbody>
	@foreach($posts as $post)
	<tr>
		<td>{{ $post->id }}</td>
		<td>{{ $post->title }}</td>
		<td>{{ $post->content }}</td>
		<td>{{ $post->url }}</td>
	</tr>
	@endforeach
	</tbody>
	</table>
@stop