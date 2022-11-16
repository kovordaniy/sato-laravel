<x-app-layout>
    <div class="flex justify-between items-center space-x-8 mb-4">
        <h1>View</h1>
    </div>

    <x-form-group>
        <x-label for="name">Name</x-label>
        <x-input type="name" value="{{ $user->name }}" disabled readonly name="name" id="name" />
    </x-form-group>

    <x-form-group>
        <x-label for="email">Email</x-label>
        <x-input type="email" value="{{ $user->email }}" disabled readonly name="email" id="email" />
    </x-form-group>

    <div>
        <a type="button" href="{{ route('users.edit', $user) }}" class="button large">Edit</a>
        <a type="button" href="{{ route('users.index') }}" class="button large link">Back</button>
    </div>
</x-app-layout>
