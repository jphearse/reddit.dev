@extends('layouts.masterInputs')


@section('content')
	<h1>{{ $users->name }}</h1>
	<h3>{{ $users->email}}</h3>
	<h3>User ID: {{ $users->id}}</h3>
	@if(Auth::id() == $users->id)
		<a href="{{action('UserController@edit', $users->id)}}"><button type="button" class="btn btn-warning">Edit <i class="fa fa-pencil"></i></button></a>
	@endif
	<hr>

	<h2>Posts</h2>

	@foreach($users->posts as $post)
	<div class="well">
      <div class="media">
      	<a class="pull-left" href="{{action('PostsController@show', $post->id)}}">
    		<img class="media-object" src="http://placekitten.com/150/150">
  		</a>
  		<div class="media-body">
    		<a href="{{action('PostsController@show', $post->id)}}"><h4 class="media-heading">{{ $post->title }}</h4></a>
          <p>{{ $post->content }}</p>
          <ul class="list-inline list-unstyled">
  			<li><span><i class="glyphicon glyphicon-calendar"></i> {{ $post->created_at->format('l, jS F  Y') }}</span></li>
            <li>|</li>
            <span><i class="glyphicon glyphicon-comment"></i> 2 comments</span>
            <li>|</li>
            <li>
               <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
            </li>
            <li>|</li>
            <li>
            <!-- Use Font Awesome http://fortawesome.github.io/Font-Awesome/ -->
              <span><i class="fa fa-facebook-square"></i></span>
              <span><i class="fa fa-twitter-square"></i></span>
              <span><i class="fa fa-google-plus-square"></i></span>
            </li>
			</ul>
       </div>
    </div>
  </div>
	@endforeach


@stop
