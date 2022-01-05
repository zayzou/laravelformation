@extends('layouts.app')
@section('content')
    <h3>Créer un article</h3>
    <form action="{{ route('posts.store') }}" method="POST" novalidate>
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Post title</label>
            <input type="text" name="title" class="@error('title') is-invalid  @enderror form-control"
                id="exampleFormControlInput1" placeholder="Title goes here ...">
            @error('title')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                   {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Content</label>
            <textarea class="@error('content') is-invalid @enderror form-control" name="content"
                id="exampleFormControlTextarea1" rows="3"></textarea>
            @error('content')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
@endsection
