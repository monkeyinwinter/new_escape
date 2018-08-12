<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

           // <!-- {{ $users -> name }} -->
    public function index()
    {

      $users = DB::table('users')
              ->leftJoin('posts', 'users.id', '=', 'posts.user_id')
              ->select('name')
              ->get();

      $posts = Post::paginate(10);
      return view('post.index', ['posts'=>$posts, 'users'=>$users]);

    }


    public function mesposts()
    {

      $auths = Auth::user()->id;
      var_dump($auths);

      $users = DB::table('users')
              ->leftJoin('posts', 'users.id', '=', 'posts.user_id')
              ->select('name')
              ->get();

      $posts = Post::paginate(10);
      return view('post.mesposts', ['posts'=>$posts, 'users'=>$users, 'auths'=>$auths]);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)

    {
      $user = Auth::user();

      $validatedData = $request->validate([
          'title' => 'required|max:255',
          'textPost' => 'required|max:255',
       ]);

      $post = new Post($validatedData);

      $post->user_id = $user->id;

      $post->save();

      return redirect()->route('post.index');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */


    public function edit(Post $post)

    {
      return view('post.edit', ['post'=>$post]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
      $request->validate([
        'title' => 'required|max:255',
        'textPost' => 'required|max:255',
      ]);
      $post->update($request->all());
      return redirect()->route('post.index',['post'=>$post->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
      $post->delete();
      return redirect()->route('post.index');
    }
}
