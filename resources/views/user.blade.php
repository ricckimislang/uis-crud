<x-layout>
    <x-slot:headingTitle>
        Users Profile
    </x-slot:headingTitle>

    <div class="bg-white rounded-lg shadow-md space-y-4 p-4">
        <div class="flex flex-col space-y-2">
            <h1 class="text-3xl font-bold">{{ $user['name'] }}</h1>
            <div class="flex  space-x-2">
                <h2>Email:</h2>
                <p>{{ $user['email'] }}</p>
            </div>
            <div class="flex justify-end">
                <a href="/users" class="btn btn-sm bg-gray-300 rounded-md hover:bg-gray-200">Back</a>
            </div>

        </div>

    </div>

</x-layout>