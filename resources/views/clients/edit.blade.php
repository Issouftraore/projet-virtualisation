<!-- resources/views/clients/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Client</h1>

    <form action="{{ route('clients.update', $client) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" name="firstname" id="firstname" class="form-control" value="{{ $client->firstname }}" required>
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" name="lastname" id="lastname" class="form-control" value="{{ $client->lastname }}" required>
        </div>
        <div class="form-group">
            <label for="birthday">Birthday</label>
            <input type="date" name="birthday" id="birthday" class="form-control" value="{{ $client->birthday }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
