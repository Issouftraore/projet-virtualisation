@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Ajouter une Catégorie</h1>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mb-3">Ajouter</button>
    </form>
</div>
@endsection