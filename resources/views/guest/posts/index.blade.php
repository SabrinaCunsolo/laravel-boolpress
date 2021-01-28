@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Tutti i post</h2>
                <ul class="list-unstyled list-group list-group-flush">
                    @foreach ($posts as $post)
                        <li class="list-group-item list-group-item-info list-group-item-action">
                            <a class="" href="{{ route('posts.show', ['slug' => $post->slug])}}">
                                    {{ $post->title}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
