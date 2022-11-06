<x-app-layout>
    <div class="flex justify-between items-center space-x-8 mb-4">
        <h1>Edit</h1>
    </div>

    <form action="{{route('users.update',$user)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="name" value="{{ $user->name }}" required name="name" id="name" placeholder="Enter Name">
        </div>
        @error('name')
            <div class="error">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" value="{{ $user->email }}" required name="email" id="email" placeholder="Enter Email">
        </div>
        @error('email')
        <div class="error">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter Password">
        </div>
        @error('password')
        <div class="error">{{ $message }}</div>
        @enderror

        <button type="submit" class="button large">Update</button>
        <a type="button" href="{{ route('users.index') }}" class="button large link">Cancel</button>
    </form>
</x-app-layout>
