@extends('layouts.masterInputs')

@section('title', 'Users')

@section('content')
	<form class="input-form" method="GET" name="search" action="{{ action('UserController@index') }}">
            <div class="form-group">
            <input type="text" class="form-control" placeholder="Search" name="search">
            </div>
            <button type="submit" class="btn btn-default">Search</button>
	</form>

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
				<a href="{{action('UserController@show', $user->id)}}">
					
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