<?php
namespace App\Http\Controllers;

use App\Spot;
use App\Ville;
use App\Departement;
use App\Region;
use App\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
        $posts = Post::paginate(30);
        return view('post.index', ['posts'=>$posts]);
    }


    public function mesposts()
    {
        $user = Auth::user();

        $posts = Post::where('user_id',$user->id)->paginate(100);

        return view('post.mesposts', ['posts'=>$posts]);
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


    public function spotPostList(Region $region, Departement $departement, Ville $ville, Spot $spot)
    {
        $region = $region;
        $departement = $departement;
        $ville = $ville;
        $spots = $spot;

        $posts = Post::where('spot_id',$spot->id)->paginate(100);

        return view('spot.spotPostList', ['posts'=>$posts, 'spots'=>$spots, 'ville' => $ville, 'departement' => $departement, 'region' => $region]);
    }

    public function spotPostCreate(Region $region, Departement $departement, Ville $ville, Spot $spot)
    {
        return view('spot.spotPostCreate', ['spot'=>$spot, 'region' => $region, 'departement' => $departement, 'ville' => $ville ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function spotPostStore(Request $request, Region $region, Departement $departement, Ville $ville, Spot $spot)
    {

        $spots = $spot;

        $user = Auth::user();

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'textPost' => 'required|max:255',
        ]);

        $post = new Post($validatedData);
        $post->user_id = $user->id;
        $post->spot_id = $spot->id;

        $post->save();

        return redirect()->route('spot.index', ['spots'=>$spots, 'ville' => $ville, 'departement' => $departement, 'region' => $region]);
    }


}