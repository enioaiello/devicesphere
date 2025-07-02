<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Panneau d\'administration') }}
        </h2>
    </x-slot>

        <div class="py-3">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h2 class="font-semibold text-xl">{{ __("Bienvenue " . Auth::user()->name) }}</h2>
                        @if ($devices->isNotEmpty())
                            <p>{{ __("Vous avez " . $devicesCount) }} {{ __(" appareils enregistrés.") }}</p>
                        @elseif ($devicesCount == "1")
                            <p>{{ __("Vous avez " . $devicesCount) }} {{ __(" appareil enregistré.") }}</p>
                        @else
                            <p>{{ __("Aucun appareil enregistré !") }}</p>
                        @endif
                        @if ($devices->isNotEmpty())
                            <p>{{ __("Vous avez " . $repairCount) }} {{ __(" réparations.") }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="py-3">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h2 class="font-semibold text-xl">{{ __("Gérer les appareils") }}</h2>
                        <p>{{ __("Ajoutez, modifiez ou archivez un appareil.") }}</p>
                        <a href="{{ route('devices.manage') }}" class="block text-right text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
                            {{ __("Commencer") }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-3">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h2 class="font-semibold text-xl">{{ __("Gérer les composants") }}</h2>
                        <p>{{ __("Ajoutez, modifiez ou supprimez les composants provenant d'appareil.") }}</p>
                        <a href="{{ route('devices.manage') }}" class="block text-right text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
                            {{ __("Commencer") }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-3">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h2 class="font-semibold text-xl">{{ __("Gérer les réparations") }}</h2>
                        <p>{{ __("Ajoutez ou modifiez une réparation.") }}</p>
                        <a href="{{ route('devices.manage') }}" class="block text-right text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
                            {{ __("Commencer") }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-3">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h2 class="font-semibold text-xl">{{ __("Gérer les prêts") }}</h2>
                        <p>{{ __("Ajoutez ou modifiez un prêt.") }}</p>
                        <a href="{{ route('devices.manage') }}" class="block text-right text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
                            {{ __("Commencer") }}
                        </a>
                    </div>
                </div>
            </div>
        </div>

</x-app-layout>
