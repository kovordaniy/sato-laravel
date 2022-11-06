<x-app-layout>

    @if ($user = Session::get('success'))
        <div class="alert">
            User {{ $user->name }} has been created!
        </div>
    @endif

    @if ($user = Session::get('delete.success'))
        <div class="alert">
            User {{ $user->name }} has been deleted!
        </div>
    @endif

    <div class="flex justify-between items-center space-x-8 mb-4">
        <h1>Users</h1>
        <a href="{{ route('users.create' )}}" type="button" class="button" >Add User</a>
    </div>

    <div class="block w-full overflow-x-auto">
        <table class="items-center bg-white w-full border-collapse mb-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td class="w-0 whitespace-nowrap">
                            <a href="{{ route('users.show', $user) }}" type="button" class="button outline">View</a>
                            <a href="{{ route('users.edit', $user) }}" type="button" class="button outline">Edit</a>
                            <button data-action="{{ route('users.destroy', $user) }}" data-name="{{ $user->name }}" type="button" class="button outline delete-user">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <?php echo $users->render(); ?>

    <div class="relative z-10 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="delete-user-modal">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
        <div class="fixed inset-0 z-10 overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                    <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 10.5v3.75m-9.303 3.376C1.83 19.126 2.914 21 4.645 21h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 4.88c-.866-1.501-3.032-1.501-3.898 0L2.697 17.626zM12 17.25h.007v.008H12v-.008z" />
                    </svg>
                    </div>
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                    <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">Delete user - <span></span></h3>
                    <div class="mt-2">
                        <p class="text-sm text-gray-500">Are you sure you want to delete user? All of your data will be permanently removed. This action cannot be undone.</p>
                    </div>
                    </div>
                </div>
                </div>
                <form method="post">
                    @csrf
                    @method('DELETE')
                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <button id="delete-user-confirm" type="submit" class="inline-flex w-full sm:text-sm sm:w-auto sm:ml-3 justify-center button danger">Delete</button>
                        <button id="delete-user-cancel" type="button" class="mt-3 inline-flex w-full sm:mt-0 sm:text-sm sm:w-auto sm:ml-3 justify-center button outline">Cancel</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>

</x-app-layout>
