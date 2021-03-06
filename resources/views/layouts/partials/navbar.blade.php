<div class="navbar navbar-inverse">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ action('PostsController@index') }}">Reddit.dev</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ action('PostsController@index') }}">Posts</a></li>
                <li><a href="{{ action('UserController@index') }}">User</a></li>
                @if(Auth::check())
                    <li><a href="{{ action('UserController@show', Auth::id()) }}">{{ Auth::user()->name }}</a></li>
                    <li><a href="{{ action('Auth\AuthController@getLogout') }}">Logout</a></li>
                    <li><a href="{{ action('PostsController@create') }}">Create Post</a></li>
                @else
                    <li><a href="{{ action('Auth\AuthController@getLogin') }}">Login</a></li>
                    <li><a href="{{ action('Auth\AuthController@getRegister') }}">Register</a></li>
                @endif
            </ul>
            <form class="navbar-form navbar-right" method="GET" action="{{ action('PostsController@index') }}">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search" name="search">
                </div>
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </form>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</div>