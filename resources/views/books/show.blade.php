<!-- resources/views/books/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>{{ $book->title }}</h1>
    <p>{{ $book->description }}</p>
    <p>Author: {{ $book->author }}</p>
    <p>Date Published: {{ $book->datePub }}</p>

    <h2>Borrow this book</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('books.borrow', $book) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="client_id">Client</label>
            <select name="client_id" id="client_id" class="form-control" required>
                @foreach ($clients as $client)
                    <option value="{{ $client->id }}">{{ $client->firstname }} {{ $client->lastname }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Borrow</button>
    </form>
@endsection
