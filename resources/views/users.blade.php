<x-layout>
    <x-slot:headingTitle>
        Users List
    </x-slot:headingTitle>

    <div class="space-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach($users as $user)
            <x-users-grid :name="$user->name" :id="$user->id" />
        @endforeach
    </div>
</x-layout>