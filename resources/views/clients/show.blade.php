<!-- resources/views/clients/show.blade.php -->

@extends('layouts.app')

@section('content')
<h1>{{ $client->firstname }} {{ $client->lastname }}</h1>
<p><strong>Birthday:</strong> {{ $client->birthday }}</p>
<a href="{{ route('clients.borrowedBooks', $client) }}" class="btn btn-secondary">Livres Empruntés</a>
@endsection