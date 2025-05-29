<x-layout>
    <x-slot:headingTitle>
        Users Profile
    </x-slot:headingTitle>

    <x-user-card :name="$user->name" :email="$user->email"
    :contact="$user->userDetails->contact" :age="$user->userDetails->age" 
    :gender="$user->userDetails->gender" :occupation="$user->userDetails->occupation"
    :province="$user->userAddress->province" :city="$user->userAddress->city" :barangay="$user->userAddress->barangay"
    />

</x-layout>