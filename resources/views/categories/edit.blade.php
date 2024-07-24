@extends('layouts.app')

@section('content')
<h1>Modifier la Catégorie</h1>

<form action="{{ route('categories.update', $category) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Nom</label>
        <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Mettre à jour</button>
</form>
@endsection