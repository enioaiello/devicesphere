<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Accueil') }}
        </h2>
    </x-slot>

    @if ($user->role === 'admin')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <h2 class="font-semibold text-xl">{{ __("Appareils") }}</h2>
                    <ul>
                        @foreach ($randomDevices as $device)
                            <li>{{ $device->name }}</li>
                        @endforeach
                    </ul>
                    <a href="{{ route("devices") }}" class="block text-right text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
                        Tous les appareils
                    </a>
                </div>

                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <h2 class="font-semibold text-xl">{{ __("Réparations") }}</h2>
                    <a href="{{ route("repairs") }}" class="block text-right text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
                        Toutes les réparations
                    </a>
                </div>

                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <h2 class="font-semibold text-xl">{{ __("Prêts") }}</h2>
                    <a href="{{ route("loans") }}" class="block text-right text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
                        Tous les prêts
                    </a>
                </div>
            </div>
        </div>
    @else
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <h2 class="font-semibold text-xl">{{ __("Mes prêts") }}</h2>
                </div>
            </div>
        </div>
    @endif

</x-app-layout>
