@props(['name', 'email', 'contact' => 'N/A', 'age' => 'N/A', 'gender' => 'N/A', 'occupation' => 'N/A', 'province' => 'N/A', 'city' => 'N/A', 'barangay' => 'N/A'])

<div class="bg-white rounded-xl shadow-lg m-auto p-6 w-full max-w-2xl border border-gray-200">
    <div class="flex items-center space-x-4 mb-4">
        <div class="flex-shrink-0 bg-blue-100 rounded-full p-3">
            <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                stroke-linecap="round" stroke-linejoin="round">
                <path
                    d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
            </svg>
        </div>
        <div>
            <h1 class="text-2xl font-bold text-gray-800">{{ ucwords($name) }}</h1>
            <p class="text-gray-500">{{ $occupation }}</p>
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
        <div class="flex items-center space-x-2">
            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M16 12a4 4 0 1 0-8 0 4 4 0 0 0 8 0z" />
            </svg>
            <span class="text-gray-700">Email:</span>
            <span class="font-medium">{{ $email }}</span>
        </div>
        <div class="flex items-center space-x-2">
            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M16 12a4 4 0 1 0-8 0 4 4 0 0 0 8 0z" />
                <path d="M12 16v6" />
            </svg>
            <span class="text-gray-700">Age:</span>
            <span class="font-medium">{{ $age }}</span>
        </div>
        <div class="flex items-center space-x-2">
            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M20 21v-2a4 4 0 0 0-3-3.87" />
                <path d="M4 21v-2a4 4 0 0 1 3-3.87" />
                <circle cx="12" cy="7" r="4" />
            </svg>
            <span class="text-gray-700">Gender:</span>
            <span class="font-medium">{{ $gender }}</span>
        </div>
        <div class="flex items-center space-x-2">
            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M16 2a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8z" />
            </svg>
            <span class="text-gray-700">Contact:</span>
            <span class="font-medium">{{ $contact }}</span>
        </div>

    </div>
    <div class="bg-gray-50 rounded-lg p-4">
        <h2 class="text-lg font-semibold text-gray-700 mb-2 flex items-center">
            <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path d="M21 10.5a8.38 8.38 0 0 1-1.9.5 4.48 4.48 0 0 0-7.6 0A8.38 8.38 0 0 1 3 10.5" />
                <path d="M12 21v-7" />
            </svg>
            Address
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-2">
            <div>
                <span class="text-gray-500 text-xs">Province</span>
                <div class="font-medium text-gray-800">{{ $province }}</div>
            </div>
            <div>
                <span class="text-gray-500 text-xs">City</span>
                <div class="font-medium text-gray-800">{{ $city }}</div>
            </div>
            <div>
                <span class="text-gray-500 text-xs">Barangay</span>
                <div class="font-medium text-gray-800">{{ $barangay }}</div>
            </div>
        </div>
    </div>
    <div class="flex justify-end mt-6">
        <a href="/users"
            class="btn btn-sm bg-blue-500 text-white rounded-md hover:bg-blue-600 px-4 py-2 transition">Back</a>
    </div>
</div>