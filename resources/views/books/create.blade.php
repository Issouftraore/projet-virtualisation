@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Ajouter un Nouveau Livre</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="title">Titre</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
            </div>
            <div class="form-group col-md-6">
                <label for="author">Auteur</label>
                <input type="text" class="form-control" id="author" name="author" value="{{ old('author') }}" required>
            </div>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4"
                required>{{ old('description') }}</textarea>
        </div>
        <div class="form-group">
            <label for="datePub">Date de Publication</label>
            <input type="date" class="form-control" id="datePub" name="datePub" value="{{ old('datePub') }}" required>
        </div>
        <div class="form-group">
            <label for="category_id">Catégorie</label>
            <select class="form-control" id="category_id" name="category_id" required>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-4">Ajouter le Livre</button>

    </form>
</div>
@endsection