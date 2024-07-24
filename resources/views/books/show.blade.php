@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">{{ $book->title }}</h1>

    <p><strong>Description :</strong> {{ $book->description }}</p>
    <p><strong>Auteur :</strong> {{ $book->author }}</p>
    <p><strong>Date de publication :</strong> {{ $book->datePub }}</p>

    <h2 class="mt-4">Emprunter ce livre</h2>

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
        <button type="submit" class="btn btn-primary">Emprunter</button>
    </form>
</div>
@endsection