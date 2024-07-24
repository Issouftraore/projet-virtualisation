@extends('layouts.app')

@section('content')
<h1>Clients</h1>
<a href="{{ route('clients.create') }}" class="btn btn-library mb-4">Ajouter un Client</a>

@if (session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Date de Naissance</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clients as $client)
        <tr>
            <td>{{ $client->id }}</td>
            <td>{{ $client->firstname }}</td>
            <td>{{ $client->lastname }}</td>
            <td>{{ $client->birthday }}</td>
            <td>
                <a href="{{ route('clients.show', $client) }}" class="btn btn-info">Voir</a>
                <a href="{{ route('clients.edit', $client) }}" class="btn btn-warning">Modifier</a>
                <form action="{{ route('clients.destroy', $client) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
                <a href="{{ route('clients.borrowedBooks', $client) }}" class="btn btn-secondary">Livres Empruntés</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection