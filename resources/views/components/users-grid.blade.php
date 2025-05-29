@props(['name', 'id'])

<div class="bg-gradient-to-br from-blue-50 via-white to-gray-100 
rounded-xl shadow-lg p-6 transition-transform duration-200 hover:scale-105 hover:shadow-xl group">
    <div class="flex flex-col items-center">
        <div class="bg-blue-100 rounded-full p-4 mb-4 shadow-sm">
            <i class="fa-solid fa-user w-10 h-10 text-blue-500 text-4xl text-center"></i>
        </div>
        <h1 class="text-2xl font-semibold text-gray-800 group-hover:text-blue-700 mb-1 text-center">{{ $name }}</h1>
    </div>
    <div class="flex justify-center mt-2">
        <x-button type="a"
            class="btn btn-primary btn-sm px-6 py-2 rounded-full text-white font-medium shadow transition-colors duration-150"
            href="/user/{{ $id }}">
            <i class="fa-solid fa-eye"></i>
            View Profile
        </x-button>
    </div>
</div>