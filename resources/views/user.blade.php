<x-layout>
    <x-slot:headingTitle>
        Users Profile
    </x-slot:headingTitle>

    <x-user-card :name="$user->name" :email="$user->email"/>

</x-layout>