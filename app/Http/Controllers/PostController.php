<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Video;
use App\Rules\Uppercase;
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

    public function showTag($id)
    {
        $tagName = Tag::findOrFail($id)->name;
        $posts = Tag::findOrFail($id)->posts()->get();
        return view('tags', compact('posts', 'tagName'));
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

        $request->validate([
            'title' => 'required|min:5|max:255|alpha_num',
            'content'=>['required',new Uppercase]
        ]);
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);
        dd("Post saved successfully");
    }

    public function register()
    {
        $comment1 = new Comment(['content' => 'First comment']);
        $comment2 = new Comment(['content' => 'Second comment']);
        $comment3 = new Comment(['content' => 'Third comment']);
        $comment4 = new Comment(['content' => 'Fourth comment']);

        $post = Post::find(12);
        $video = Video::find(1);

        $post->comments()->saveMany([
            $comment1,
            $comment2,
            $comment3,
        ]);

        $video->comments()->save($comment4);
    }
}
