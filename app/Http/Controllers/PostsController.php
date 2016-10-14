<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Support\Facades\Log;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Log::info('This is some useful information.');
        Log::debug('Here is some information that will help me find an error');
        Log::warning('Something could be going wrong.');
        Log::error('Something is really going wrong.');

        $data['posts'] = \App\Models\Post::paginate(4);
        return view('posts.index') -> with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $inputs = $request->all();
        // var_dump($inputs);
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $rules = [
            'title'   => 'required|min:1',
            'url'     => 'required',
            'content' => 'required',
        ];
        // will redirect back with $errors object populated if validation fails
        $request->session()->flash('ERROR_MESSAGE', 'Post was not saved. Please fix errors.');
        $this->validate($request, $rules);
        $request->session()->forget('ERROR_MESSAGE');

        $post = new Post;
        $post->title = $request->title;
        $post->url = $request->url;
        $post->content = $request->content;
        $post->created_by = 1;
        $post->save();

        $request->session()->flash('SUCCESS_MESSAGE', 'Post was saved successfully');
        
        Log::info($post->title . ' created');

        return redirect()->action('PostsController@show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $posts = \App\Models\Post::find($id);
        // return $posts;
        // return 'Show a specific post';
        $data['posts'] = \App\Models\Post::find($id);
        return view('posts.show') -> with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $data = ['post' => $post];
        return view('posts.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'title'   => 'required|min:1',
            'url'     => 'required',
            'content' => 'required',
        ];

        $this->validate($request, $rules);

        $post = Post::find($id);
        $post->title = $request->title;
        $post->url = $request->url;
        $post->content = $request->content;
        $post->save();

        $request->session()->flash('SUCCESS_MESSAGE', 'Post was updated successfully');
        return redirect()->action('PostsController@show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $post = Post::find($id);
        $post->delete($id);

        $request->session()->flash('SUCCESS_MESSAGE', 'Post deleted successfully');
        return redirect()->action('PostsController@index');
    }
}
