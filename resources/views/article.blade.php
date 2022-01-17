@extends('layouts.app')
@section('content')
    <h3>Détail de article</h3>
    <p>{{$post->content}}</p>
    @forelse($post->comments as $comment)
        <div>
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
