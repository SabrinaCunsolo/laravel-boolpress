@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Visualizzazione post {{ $post->id }}</h1>
                <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">
                    Tutti i posts
                </a>
            </div>
            <dl>
                <dt>Titolo</dt>
                <dd>{{ $post->title }}</dd>
                <dt>Sottotitolo</dt>
                <dd>{{ $post->subtitle }}</dd>
                <dt>Slug</dt>
                <dd>{{ $post->slug }}</dd>
                <dt>Contenuto</dt>
                <dd>{{ $post->text }}</dd>
                <dt>Categoria</dt>
                <dd>{{ $post->category ? $post->category->name : '-' }}</dd>
                <dt>Tag</dt>
                <dd>
                    @forelse ($post->tags as $tag)
                        {{ $tag->name }}{{ !$loop->last ? ',' : '' }}
                    @empty
                        -
                    @endforelse</dd>
            </dl>
            <a href="{{ route('admin.posts.edit', ['post' => $post->id]) }}"
                class="btn btn-warning">
                Modifica
            </a>
            <form class="d-inline-block" action="{{ route('admin.posts.destroy', ['post' => $post->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">
                    Elimina
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
