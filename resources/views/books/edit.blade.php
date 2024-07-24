@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Modifier le Livre</h1>

    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $book->title }}" required>
        </div>

        <div class="form-group">
            <label for="author">Auteur</label>
            <input type="text" name="author" id="author" class="form-control" value="{{ $book->author }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control"
                required>{{ $book->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="datePub">Date de Publication</label>
            <input type="date" name="datePub" id="datePub" class="form-control" value="{{ $book->datePub }}" required>
        </div>

        <div class="form-group">
            <label for="category_id">Catégorie</label>
            <select name="category_id" id="category_id" class="form-control" required>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $category->id == $book->category_id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Mettre à Jour le Livre</button>
    </form>
</div>
@endsection

@section('styles')
<style>
.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    background-color: #f9f9f9;
}

h1 {
    font-size: 2rem;
    color: #333;
    text-align: center;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 1.5rem;
}

label {
    font-weight: bold;
    color: #333;
}

.btn-primary {
    background-color: #5d3f2a;
    border-color: #5d3f2a;
    font-size: 1rem;
    padding: 10px 20px;
    border-radius: 5px;
    transition: background-color 0.3s, border-color 0.3s;
}

.btn-primary:hover {
    background-color: #6f4f28;
    border-color: #6f4f28;
}
</style>
@endsection