@extends('layouts.app')
@section('content')
    <h3>List des articles</h3>
    @foreach($posts as $post)
        <h3>{{$post}}</h3>
    @endforeach
@endsection
