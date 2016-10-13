@extends('layouts.masterInputs')

@section('show')
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
	<tr>
		<td>{{ $posts->id }}</td>
		<td>{{ $posts->title }}</td>
		<td>{{ $posts->content }}</td>
		<td>{{ $posts->url }}</td>
	</tr>
	</tbody>
	</table>
@stop