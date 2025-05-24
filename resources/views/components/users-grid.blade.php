@props(['name', 'id'])

<div class="bg-white rounded-lg shadow-md space-4 p-4 hover:bg-gray-100">
    <div class="flex flex-col">
        <h1 class="text-3xl font-bold">{{ $name }}</h1>
        </h2>
    </div>
    <div class="flex justify-end mt-4">
        <a href="/user/{{ $id }}" class=" btn btn-primary btn-sm text-white px-4 py-2 
                                            rounded-md hover:bg-blue-600">
            View</a>
    </div>
</div>