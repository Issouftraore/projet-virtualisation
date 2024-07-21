<!-- resources/views/clients/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Add Client</h1>

    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" name="firstname" id="firstname" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" name="lastname" id="lastname" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="birthday">Birthday</label>
            <input type="date" name="birthday" id="birthday" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
