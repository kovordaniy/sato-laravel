@extends('layouts.index')
@section('content')
    <div class="flex justify-between items-center space-x-8 mb-4">
        <h1>View</h1>
    </div>

    <div class="form-group">
        <label for="name">Name</label>
        <input type="name" value="{{ $user->name }}" disabled readonly name="name" id="name">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" value="{{ $user->email }}" disabled readonly name="email" id="email">
    </div>

    <div>
        <a type="button" href="{{ route('users.edit', $user) }}" class="button large">Edit</a>
        <a type="button" href="{{ route('users.index') }}" class="button large link">Back</button>
    </div>
@stop