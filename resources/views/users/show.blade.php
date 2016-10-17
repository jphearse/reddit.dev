@extends('layouts.masterInputs')


@section('content')
	<h1>{{ $users->name }}</h1>
	<h2>{{ $users->email}}</h2>
	<h2>User ID: {{ $users->id}}</h2>

@stop
