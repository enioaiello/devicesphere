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
                        <h2 class="font-semibold text-xl">{{ __("Bienvenue ", ['name' => $user->name]) }}</h2>
                        @if ($device->isNotEmpty())
                            <p>{{ __("Vous avez ", ['count' => $deviceCount]) }} {{ __(" appareils enregistrés.") }}</p>
                        @else
                            <p>{{ __("Aucun appareil enregistré !") }}</p>
                        @endif
                        @if ($device->isNotEmpty())
                            <p>{{ __("Vous avez ", ['repair' => $repairCount]) }} {{ __(" réparations.") }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>

</x-app-layout>
