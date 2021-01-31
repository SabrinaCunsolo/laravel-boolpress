@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Categoria: {{ $category->name }} </h2>
                <ul>
                    @foreach ($category->posts as $post)
                        <li>
                            <a href="{{ route('posts.show', ['slug' => $post->slug]) }}">
                            {{ $post->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
