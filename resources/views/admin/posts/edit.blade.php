@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Modifica post {{ $post->id }}</h1>
                <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">
                    Tutti i posts
                </a>
            </div>
            <form action="{{ route('admin.posts.update', ['post' => $post->id]) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Titolo</label>
                    <input type="text" name="title" class="form-control" placeholder="Inserisci il titolo" value="{{ $post->title }}" maxlength="255" required>
                </div>
                <div class="form-group">
                    <label>Sottotitolo</label>
                    <input type="text" name="subtitle" class="form-control" placeholder="Inserisci il titolo" value="{{ $post->subtitle }}" maxlength="255" required>
                </div>
                <div class="form-group">
                    <label>Contenuto</label>
                    <textarea name="text" class="form-control" rows="10" placeholder="Scrivi qualcosa..." required>{{ $post->text }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        Salva post
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
