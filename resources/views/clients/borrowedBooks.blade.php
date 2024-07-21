<!-- resources/views/clients/borrowedBooks.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Books borrowed by {{ $client->firstname }} {{ $client->lastname }}</h1>

    @if ($books->isEmpty())
        <p>No books borrowed.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Description</th>
                    <th>Date Published</th>
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
