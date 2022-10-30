@extends('layouts.index')
@section('content')
    <div class="flex justify-between items-center space-x-8 mb-4">
        <h1>Add New</h1>
    </div>

    <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="name" required name="name" id="name" placeholder="Enter Name">
        </div>
        @error('name')
            <div class="error">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" required name="email" id="email" placeholder="Enter Email">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" required name="password" id="password" placeholder="Enter Password">
        </div>

        <button type="submit" class="button large">Create</button>
        <a type="button" href="{{ route('users.index') }}" class="button large link">Cancel</button>
    </form>
@stop