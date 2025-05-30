<x-layout>

    <x-slot:headingTitle>
        Create User
    </x-slot:headingTitle>

    <form method="POST" action="/users" class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow-md space-y-6">
        <h2 class="text-2xl font-bold">User Information</h2>
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="label">
                    <span class="label-text">Name</span>
                </label>
                <input type="text" name="name"
                    class="input border-blue-200 border-1 focus:outline-blue-600 focus:ring-0 w-full"
                    placeholder="Enter your name" value="{{ old('name') }}" required />
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
                    placeholder="Enter your email" value="{{ old('email') }}" required />
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
                    placeholder="+63 9XX-XXX-XXXX" value="{{ old('contact') }}" required />
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
                    placeholder="Enter your age" value="{{ old('age') }}" required />
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
                    <option disabled selected>Select gender</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
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
                    placeholder="Enter your occupation" value="{{ old('occupation') }}" required />
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
                    placeholder="Enter your province" value="{{ old('province') }}" required />
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
                    placeholder="Enter your city" value="{{ old('city') }}" required />
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
                    placeholder="Enter your street" value="{{ old('street') }}" required />
                @error('street')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="text-right">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

</x-layout>