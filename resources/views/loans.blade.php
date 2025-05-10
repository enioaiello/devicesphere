<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Réparations') }}
        </h2>
    </x-slot>

    @foreach ($loans as $loan)
        <div class="py-3">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h2 class="font-semibold text-xl">{{ __($loan->device_id) }}</h2>
                        <p>{{ __("Emprunté par ", $loan->user_id) }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</x-app-layout>
