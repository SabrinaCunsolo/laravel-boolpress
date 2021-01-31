@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Creazione nuovo post</h2>
                <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">
                    Tutti i posts
                </a>
            </div>
            <form action="{{ route('admin.posts.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label>Titolo</label>
                    <input type="text" name="title" class="form-control" placeholder="Inserisci il titolo" maxlength="255" required>
                </div>
                <div class="form-group">
                    <label>Sottotitolo</label>
                    <input type="text" name="subtitle" class="form-control" placeholder="Inserisci il sottotitolo" maxlength="255" required>
                </div>
                <div class="form-group">
                    <label>Contenuto</label>
                    <textarea name="text" class="form-control" rows="10" placeholder="Scrivi qualcosa..." required></textarea>
                </div>
                <div class="form-group">
                    <label>Autore</label>
                    <input type="text" name="author" class="form-control" placeholder="Inserisci il nome" maxlength="255" required>
                </div>
                <div class="form-group">
                    <label>Data</label>
                    <input type="date" name="date" class="form-control">
                </div>
                <div class="form-group">
                    <label>Categoria</label>
                    <select class="form-control" name="category_id">
                        <option value="">seleziona categoria</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        Crea post
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
