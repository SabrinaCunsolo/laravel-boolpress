@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Tutti i post</h2>
                <ul>
                    @foreach ($posts as $post)
                        <li>
                            {{ $post->title}}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
