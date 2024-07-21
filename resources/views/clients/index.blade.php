@extends('layouts.app')

@section('content')
    <h1>Clients</h1>
    <a href="{{ route('clients.create') }}" class="btn btn-primary">Add Client</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Birthday</th>
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
                        <a href="{{ route('clients.show', $client) }}" class="btn btn-info">View</a>
                        <a href="{{ route('clients.edit', $client) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('clients.destroy', $client) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="{{ route('clients.borrowedBooks', $client) }}" class="btn btn-secondary">Borrowed Books</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
