<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Gestion des appareils') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 dark:bg-gray-900 min-h-screen">
        <div class="mb-3 max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            {{-- Carte de bienvenue --}}
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg border border-gray-200 dark:border-gray-700">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200">
                    {{ __("Bienvenue " . Auth::user()->name) }}
                </h2>

                <div class="mt-2 text-gray-700 dark:text-gray-300 space-y-1">
                    @if ($devices->isNotEmpty())
                        <p>{{ __("Vous avez " . $devicesCount) }} {{ __(" appareils enregistrés.") }}</p>
                    @elseif ($devicesCount == "1")
                        <p>{{ __("Vous avez " . $devicesCount) }} {{ __(" appareil enregistré.") }}</p>
                    @else
                        <p>{{ __("Aucun appareil enregistré !") }}</p>
                    @endif

                    @if ($devices->isNotEmpty())
                        <p>{{ __("Vous avez " . $repairCount) }} {{ __(" réparations en attente.") }}</p>
                    @else
                        <p>{{ __("Vous n'avez aucune réparation en attente.") }}</p>
                    @endif
                </div>
            </div>

            {{-- Gérer les appareils --}}
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg border border-gray-200 dark:border-gray-700">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200">{{ __("Gérer les appareils") }}</h2>
                <p class="text-gray-700 dark:text-gray-300 mt-1">{{ __("Ajoutez, modifiez ou archivez un appareil.") }}</p>

                <a href="{{ route('devices.manage') }}"
                   class="block text-right text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 mt-3">
                    {{ __("Commencer") }}
                </a>
            </div>

            {{-- Gérer les composants --}}
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg border border-gray-200 dark:border-gray-700">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200">{{ __("Gérer les composants") }}</h2>
                <p class="text-gray-700 dark:text-gray-300 mt-1">{{ __("Ajoutez, modifiez ou supprimez les composants provenant d'appareil.") }}</p>

                <a href="{{ route('devices.manage') }}"
                   class="block text-right text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 mt-3">
                    {{ __("Commencer") }}
                </a>
            </div>

            {{-- Gérer les réparations --}}
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg border border-gray-200 dark:border-gray-700">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200">{{ __("Gérer les réparations") }}</h2>
                <p class="text-gray-700 dark:text-gray-300 mt-1">{{ __("Ajoutez, modifiez ou finissez une réparation.") }}</p>

                <a href="{{ route('devices.manage') }}"
                   class="block text-right text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 mt-3">
                    {{ __("Commencer") }}
                </a>
            </div>

            {{-- Gérer les prêts --}}
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg border border-gray-200 dark:border-gray-700">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200">{{ __("Gérer les prêts") }}</h2>
                <p class="text-gray-700 dark:text-gray-300 mt-1">{{ __("Ajoutez, modifiez ou supprimez un prêt.") }}</p>

                <a href="{{ route('devices.manage') }}"
                   class="block text-right text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 mt-3">
                    {{ __("Commencer") }}
                </a>
            </div>

        </div>
    </div>
</x-app-layout>
