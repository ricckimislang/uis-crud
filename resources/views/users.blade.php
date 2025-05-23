<x-layout>
    <x-slot:headingTitle>
        Users List
    </x-slot:headingTitle>

    <div class="space-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach($users as $user)
            <div class="bg-white rounded-lg shadow-md space-4 p-4 hover:bg-gray-100">
                <div class="flex flex-col">
                    <h1 class="text-3xl font-bold">{{ $user['name'] }}</h1>
                    <h2 class="inline">Email:<p class="inline"> {{ $user['email'] }}</p>
                    </h2>
                </div>
                <div class="flex justify-end mt-4">
                    <a href="/user/{{ $user['id'] }}" class=" btn btn-primary btn-sm text-white px-4 py-2 
                                        rounded-md hover:bg-blue-600">
                        View</a>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>