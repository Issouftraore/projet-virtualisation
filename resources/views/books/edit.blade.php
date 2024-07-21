<!-- resources/views/books/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Book</h1>

    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $book->title }}" required>
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" id="author" class="form-control" value="{{ $book->author }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" required>{{ $book->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="datePub">Date Published</label>
            <input type="date" name="datePub" id="datePub" class="form-control" value="{{ $book->datePub }}" required>
        </div>
        <div class="form-group">
            <label for="category_id">Category</label>
            <select name="category_id" id="category_id" class="form-control" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $book->category_id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update Book</button>
    </form>
@endsection
