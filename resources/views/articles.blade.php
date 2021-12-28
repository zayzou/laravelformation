@extends('layouts.app')
@section('content')
    <h1 class="text-3xl font-bold underline">
       Posts
    </h1>
    <ul class="list-group">
        @if ($posts->count() > 0)
            @foreach ($posts as $post)
                <li class="list-group-item "><a class="text-decoration-none" href="{{route("posts.show",['id'=>$post->id])}}">{{$post->title}}</a></li>
            @endforeach
        @else
            <span>Aucun Post dans la base de données !</span>
        @endif
    </ul>
@endsection
