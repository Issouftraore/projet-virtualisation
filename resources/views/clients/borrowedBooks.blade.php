<!-- resources/views/clients/borrowedBooks.blade.php -->

@extends('layouts.app')

@section('content')
<h1>Livres empruntés par {{ $client->firstname }} {{ $client->lastname }}</h1>

@if ($books->isEmpty())
<p>Aucun livre emprunté.</p>
@else
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Auteur</th>
            <th>Description</th>
            <th>Date de publication</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->description }}</td>
            <td>{{ $book->datePub }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif
@endsection