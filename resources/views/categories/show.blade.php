@extends('layouts.app')

@section('content')
<h1>{{ $category->name }}</h1>
<a href="{{ route('categories.index') }}" class="btn btn-secondary">Retour</a>
@endsection