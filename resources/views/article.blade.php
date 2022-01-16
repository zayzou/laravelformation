@extends('layouts.app')
@section('content')
    <h3>Détail de article</h3>
    <p>{{$post->content}}</p>
{{--    <p>{{$post->image ? $post->image->path : "Aucune image"}}</p>--}}
    <img src="{{asset(Storage::url($post->image->path))}}" alt="" class="img-thumbnail" style="width: 50%">
    <hr>
    @forelse($post->comments as $comment)
        <div>
            <span>¤¤¤</span>{{$comment->content}}
        </div>
    @empty
        <div class="text-muted">
            Aucun commentaire !
        </div>
    @endforelse
    @forelse($post->tags as $tag)
        <a href="{{route('tags.show',['id'=>$tag->id])}}"><span class="badge bg-secondary">{{$tag->name}}</span></a>
    @empty
        <span class="">No tag</span>
    @endforelse
@endsection
