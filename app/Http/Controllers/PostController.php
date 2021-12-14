<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    //
    public function index()
    {
        //$title = "Mon super titre ! ";
        //$desc = "Ma description ...";
        //return view('articles',compact('title'));
        //return view('articles')->with('title',$title);
//        return view('articles',[
//            'title'=>$title,
//            'desc'=>$desc
//        ]);

        $posts = [
            'My title',
            'This is a description'
        ];
        return view('articles', compact('posts'));
    }

    public function show($id)
    {
        $posts = [
            'Mon titre 1',
            'Mon titre 2',
            'Mon titre 3',
        ];
        $post = $posts[$id - 1] ?? "Pas de titre";
        return view('article', [
            'post' => $post
        ]);
    }

    public function contact()
    {
        return view('contact');
    }
}
