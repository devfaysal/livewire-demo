<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="bg-white overflow-hidden shadow-sm rounded-3">
            <div class="p-4 text-body">
                {{ __("You're logged in!") }}
            </div>
        </div>
    </div>
</x-app-layout>
