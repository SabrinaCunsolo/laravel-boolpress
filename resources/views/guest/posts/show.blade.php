@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>{{ $post->title}}</h2>
                <h3>{{ $post->subtitle}}</h3>
                <p>{{ $post->text}}</p>
                <p>{{ $post->author}}</p>
            </div>
        </div>
    </div>
@endsection
