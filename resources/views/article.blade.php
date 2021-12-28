@extends('layouts.app')
@section('content')
    <h3>Détail de article</h3>
    <p>{{$post->content}}</p>
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
@endsection
