@extends('layouts.masterInputs')

@section('title', 'Users')

@section('content')
	
	<table class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
		</tr>
	</thead>
	@foreach($users as $user)
		<tbody>
			<tr>
				<td>
					<a href="{{action('UserController@edit', $user->id)}}" class="btn btn-info btn-sm">Edit</a>
					<a href="{{action('UserController@destroy', $user->id)}}" class="btn btn-danger btn-sm">Delete</a>
				</td>
				<td>
				<a href="{{action('UserController@show', $user->id)}}" title="">
					
					{{$user->name}}
				</a>
				</td>
				<td>{{$user->email}}</td>
			</tr>
		</tbody>
	@endforeach
	</table>

	<div class="text-center">
		{!! $users->render() !!}
	</div>
@stop