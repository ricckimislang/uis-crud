<x-layout>
    <x-slot:headingTitle>
        Edit User: {{ $user->name }}
    </x-slot:headingTitle>

    <form method="POST" action="/user/{{ $user->id }}"
        class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow-md space-y-6">
        <h2 class="text-2xl font-bold">User Information</h2>
        @csrf
        @method('PATCH')
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="label">
                    <span class="label-text">Name</span>
                </label>
                <input type="text" name="name"
                    class="input border-blue-200 border-1 focus:outline-blue-600 focus:ring-0 w-full"
                    placeholder="Enter your name" value="{{ $user->name }}" required />
                @error('name')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="label">
                    <span class="label-text">Email</span>
                </label>
                <input type="email" name="email"
                    class="input border-blue-200 border-1 focus:outline-blue-600 focus:ring-0 w-full"
                    placeholder="Enter your email" value="{{ $user->email }}" required />
                @error('email')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="label">
                    <span class="label-text">Contact</span>
                </label>
                <input type="text" name="contact"
                    class="input border-blue-200 border-1 focus:outline-blue-600 focus:ring-0 w-full"
                    placeholder="+63 9XX-XXX-XXXX" value="{{ $user->userDetails->contact }}" required />
                @error('contact')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="label">
                    <span class="label-text">Age</span>
                </label>
                <input type="number" name="age"
                    class="input border-blue-200 border-1 focus:outline-blue-600 focus:ring-0 w-full"
                    placeholder="Enter your age" value="{{ $user->userDetails->age }}" required />
                @error('age')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="label">
                    <span class="label-text">Gender</span>
                </label>
                <select name="gender" class="select border-blue-200 border-1 focus:outline-blue-600 focus:ring-0 w-full"
                    value="{{ old('gender') }}">
                    <option disabled @selected(!old('gender', $user->userDetails->gender) == 'male')>Select gender
                    </option>
                    <option @selected(strtoupper($user->userDetails->gender) == 'MALE')>Male</option>
                    <option @selected(strtoupper($user->userDetails->gender) == 'FEMALE')>Female</option>
                    <option @selected(strtoupper($user->userDetails->gender) == 'OTHER')>Other</option>
                </select>
                @error('gender')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="label">
                    <span class="label-text">Occupation</span>
                </label>
                <input type="text" name="occupation"
                    class="input border-blue-200 border-1 focus:outline-blue-600 focus:ring-0 w-full"
                    placeholder="Enter your occupation" value="{{ $user->userDetails->occupation }}" required />
                @error('occupation')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="label">
                    <span class="label-text">Province</span>
                </label>
                <input type="text" name="province"
                    class="input border-blue-200 border-1 focus:outline-blue-600 focus:ring-0 w-full"
                    placeholder="Enter your province" value="{{ $user->userAddress->province }}" required />
                @error('province')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="label">
                    <span class="label-text">City</span>
                </label>
                <input type="text" name="city"
                    class="input border-blue-200 border-1 focus:outline-blue-600 focus:ring-0 w-full"
                    placeholder="Enter your city" value="{{ $user->userAddress->city }}" required />
                @error('city')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="md:col-span-2">
                <label class="label">
                    <span class="label-text">Street</span>
                </label>
                <input type="text" name="street"
                    class="input border-blue-200 border-1 focus:outline-blue-600 focus:ring-0 w-full"
                    placeholder="Enter your street" value="{{ $user->userAddress->barangay }}" required />
                @error('street')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <x-button type="submit" form="deleteForm"
                    class="btn-error btn-danger text-white rounded-md px-4 py-2 transition">
                    <i class="fa-solid fa-trash mr-1"></i> Delete
                </x-button>
            </div>
            <div class="flex items-center space-x-2">
                <x-button type="a" href="/user/{{ $user->id }}" class="btn btn-secondary">Cancel</x-button>
                <x-button type="submit" class="btn btn-primary">
                    <i class="fa-solid fa-pen-to-square mr-1"></i>Update</x-button>
            </div>
        </div>
    </form>

    <!-- delete form -->
    <form id="deleteForm" method="POST" action="/user/{{ $user->id }}" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>