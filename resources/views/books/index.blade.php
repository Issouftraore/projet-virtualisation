@extends('layouts.app')

@section('content')
<h1 class="mb-4">Livres</h1>
<a href="{{ route('books.create') }}" class="btn btn-library mb-4">Ajouter un Livre</a>

@if (session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-striped table-bordered table-hover">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Auteur</th>
            <th>Description</th>
            <th>Date de Publication</th>
            <th>Actions</th>
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
            <td>
                <a href="{{ route('books.show', $book) }}" class="btn btn-info">Voir</a>
                <a href="{{ route('books.edit', $book) }}" class="btn btn-warning">Modifier</a>
                <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

@section('styles')
<style>
/* Styles pour le bouton Ajouter un Livre */
.btn-library {
    background-color: #8b4513;
    color: #fff;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 1rem;
}

.btn-library:hover {
    background-color: #6f4f28;
    /* Couleur marron plus foncée pour le survol */
}

/* Styles pour le tableau */
.table {
    background-color: #f9f9f9;
    border-radius: 8px;
    overflow: hidden;
    border: none
}

.table th {
    background-color: #2c3e50;
    color: #fff;
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: #ecf0f1;
}


.table-hover tbody tr:hover {
    background-color: #d5dbdb;
    /* Fond gris clair au survol des lignes */
}
</style>
@endsection