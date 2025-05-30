<x-layout>
    <x-slot:headingTitle>
        Users Profile
    </x-slot:headingTitle>

    <x-user-card :name="$user->name" :email="$user->email" :contact="$user->userDetails->contact"
        :age="$user->userDetails->age" :gender="$user->userDetails->gender" :occupation="$user->userDetails->occupation"
        :province="$user->userAddress->province" :city="$user->userAddress->city"
        :barangay="$user->userAddress->barangay">

        <x-slot:button>
            <x-button type="a" href="/users/"
                class="btn-sm btn-outline bg-gray-500 text-white rounded-md px-4 py-2 transition">
                <i class="fa-solid fa-arrow-left mr-1"></i> Back
            </x-button>
            <x-button type="a" href="/user/{{ $user->id }}/edit"
                class="btn-sm btn-primary text-white rounded-md px-4 py-2 transition">
                <i class="fa-solid fa-pen-to-square mr-1"></i> Edit
            </x-button>
        </x-slot:button>
    </x-user-card>
</x-layout>