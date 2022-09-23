<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <h2>Utilisateurs du site</h2>

    <div class="overflow-x-auto relative">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        E-mail
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Role
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Edit
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Delete
                    </th>
                </tr>
            </thead>
            <tbody>

                @foreach ($users as $user)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$user->name}}
                        </th>
                        <td class="py-4 px-6">
                            {{$user->email}}
                        </td>
                        <td class="py-4 px-6">
                            {{$user->role->name}}
                        </td>
                        <td class="py-4 px-6">
                            <a href='/users/{{$user->id}}/show'><button>Edit</button></a>
                        </td>
                        <td class="py-4 px-6">
                            <form action="/users/{{$user->id}}/delete" method="post">
                                @csrf
                                @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</x-app-layout>
