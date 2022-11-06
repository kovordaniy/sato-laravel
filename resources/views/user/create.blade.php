<x-app-layout>
    <div class="flex justify-between items-center space-x-8 mb-4">
        <h1>Add New</h1>
    </div>

    <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <x-form-group>
            <x-label for="name">Name</x-label>
            <x-input type="name" required name="name" id="name" placeholder="Enter Name" />
        </x-form-group>
        @error('name')
        <x-form-error>{{ $message }}</x-form-error>
        @enderror

        <x-form-group>
            <x-label for="email">Email</x-label>
            <x-input type="email" required name="email" id="email" placeholder="Enter Email" />
        </x-form-group>

        <x-form-group>
            <x-label for="password">Password</x-label>
            <x-input type="password" required name="password" id="password" placeholder="Enter Password" />
        </x-form-group>

        <button type="submit" class="button large">Create</button>
        <a type="button" href="{{ route('users.index') }}" class="button large link">Cancel</button>
    </form>
</x-app-layout>
