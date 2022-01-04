<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        //$posts = Post::all();
        //dd($posts);
        //update
       /* $post = Post::find(1);
        $post->update(['title'=>"New title"]);
        dd("modifié ");*/

        //delete
      /*  $post = Post::find(8);
        $post->delete();
        dd("supprimé");*/

        $posts = Post::orderByDesc('created_at')->get();
        return view('articles', compact('posts'));
    }

    public function show($id)
    {

        $post = Post::findOrFail($id);
        //$post = Post::where('title','Rem consectetur reiciens aliquid ut sit.')->firstOrFail();
        //dd($post);
        //$post = $posts[$id - 1] ?? "Pas de titre";
        return view('article', [
            'post' => $post
        ]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        /*$post = new Post();
         $post->title = $request->title;
         $post->content = $request->content;
         $post->save();*/
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);
        dd("Post saved successfully");
    }
}
