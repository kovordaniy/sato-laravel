<x-app-layout>
    <div class="flex justify-between items-center space-x-8 mb-4">
        <h1>Edit</h1>
    </div>

    <form action="{{route('users.update',$user)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <x-form-group>
            <x-label for="name">Name</x-label>
            <x-input type="name" value="{{ $user->name }}" required name="name" id="name" placeholder="Enter Name" />
        </x-form-group>
        @error('name')
        <x-form-error>{{ $message }}</x-form-error>
        @enderror

        <x-form-group>
            <x-label for="email">Email</x-label>
            <x-input type="email" value="{{ $user->email }}" required name="email" id="email" placeholder="Enter Email" />
        </x-form-group>
        @error('email')
        <x-form-error>{{ $message }}</x-form-error>
        @enderror

        <x-form-group>
            <x-label for="password">Password</x-label>
            <x-input type="password" name="password" id="password" placeholder="Enter Password" />
        </x-form-group>
        @error('password')
        <x-form-error>{{ $message }}</x-form-error>
        @enderror

        <button type="submit" class="button large">Update</button>
        <a type="button" href="{{ route('users.index') }}" class="button large link">Cancel</button>
    </form>
</x-app-layout>
