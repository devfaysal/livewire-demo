<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="p-4 my-4 bg-white shadow-sm rounded-3">
            <div style="max-width: 36rem;">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <div class="p-4 my-4 bg-white shadow-sm rounded-3">
            <div style="max-width: 36rem;">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <div class="p-4 my-4 bg-white shadow-sm rounded-3">
            <div style="max-width: 36rem;">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</x-app-layout>
