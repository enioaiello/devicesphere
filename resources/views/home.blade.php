<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Accueil') }}
        </h2>
    </x-slot>

    @if ($user->role === 'admin')
        <div class="py-12 bg-gray-50 dark:bg-gray-900 min-h-screen">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg border border-gray-200 dark:border-gray-700">
                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200">{{ __("Appareils") }}</h2>
                    <p class="text-gray-600 dark:text-gray-400 mb-2">
                        {{ __("Voici quelques-uns des appareils disponibles.") }}
                    </p>
                    <div class="mb-3">
                        @if(isset($randomDevices) && $randomDevices->isNotEmpty())
                            @foreach ($randomDevices as $device)
                                <div class="p-4 sm:p-8 bg-gray-100 dark:bg-gray-700 shadow sm:rounded-lg border border-gray-200 dark:border-gray-600">
                                    <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-200 mb-2">
                                        {{ $device->name }} {{ $device->model ? ' - ' . $device->model : '' }}
                                    </h3>
                                    <ul class="mb-2 text-gray-700 dark:text-gray-300 text-sm space-y-1">
                                        <li>
                                            <span class="font-semibold">Numéro de série :</span>
                                            <span class="ml-1">{{ $device->serial_number }}</span>
                                        </li>
                                        <li>
                                            <span class="font-semibold">Utilisateur :</span>
                                            <span class="ml-1">{{ $device->user->name ?? 'Aucun prêt' }}</span>
                                        </li>
                                        <li>
                                            <span class="font-semibold">Marque :</span>
                                            <span class="ml-1">{{ $device->brand->name }}</span>
                                        </li>
                                        <li>
                                            <span class="font-semibold">Catégorie :</span>
                                            <span class="ml-1">{{ ucfirst($device->category) }}</span>
                                        </li>
                                        <li>
                                            <span class="font-semibold">Système d'exploitation :</span>
                                            <span class="ml-1">{{ $device->operating_system->brand}} {{ $device->operating_system->version }} {{ $device->operating_system->build }}</span>
                                        </li>
                                    </ul>
                                    <a href="{{ route('devices.show', $device->id) }}" class="block text-right text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
                                        {{ __("Plus de détails") }}
                                    </a>
                                </div>
                            @endforeach
                        @else
                            <div class="mt-4 p-4 sm:p-8 bg-gray-100 dark:bg-gray-700 shadow sm:rounded-lg border border-gray-200 dark:border-gray-600">
                                <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-200 mb-2">
                                    Aucun appareil pour le moment.
                                </h3>
                            </div>
                        @endif
                    </div>
                    <a href="{{ route("devices") }}" class="block text-right text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
                        Tous les appareils
                    </a>
                </div>

                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg border border-gray-200 dark:border-gray-700">
                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200">{{ __("Réparations") }}</h2>
                    <p class="text-gray-600 dark:text-gray-400 mb-2">
                        {{ __("Voici les dernières réparations nécessaires.") }}
                    </p>
                    <div class="mb-3">
                        @if(isset($lastRepairs) && $lastRepairs->isNotEmpty())
                            @foreach ($lastRepairs as $repair)
                                <div class="p-4 sm:p-8 bg-gray-100 dark:bg-gray-700 shadow sm:rounded-lg border border-gray-200 dark:border-gray-600">
                                    <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-200 mb-2">
                                        {{ $repair->device_id }}
                                    </h3>
                                    <ul class="mb-2 text-gray-700 dark:text-gray-300 text-sm space-y-1">
                                        <li>
                                            <span class="font-semibold">Description :</span>
                                            <span class="ml-1">{{ $repair->description }}</span>
                                        </li>
                                        <li>
                                            <span class="font-semibold">Coût :</span>
                                            <span class="ml-1">{{ $repair->cost ?? 'Aucun coût' }}</span>
                                        </li>
                                        <li>
                                            <span class="font-semibold">Date de signalement :</span>
                                            <span class="ml-1">{{ $repair->start_date }}</span>
                                        </li>
                                    </ul>
                                    <a href="{{ route('repairs.show', $repair->id) }}" class="block text-right text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
                                        {{ __("Plus de détails") }}
                                    </a>
                                </div>
                            @endforeach
                        @else
                            <div class="mt-4 p-4 sm:p-8 bg-gray-100 dark:bg-gray-700 shadow sm:rounded-lg border border-gray-200 dark:border-gray-600">
                                <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-200 mb-2">
                                    Aucune réparation pour le moment.
                                </h3>
                            </div>
                        @endif
                    </div>
                    <a href="{{ route("repairs") }}" class="block text-right text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
                        Toutes les réparations
                    </a>
                </div>

                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg border border-gray-200 dark:border-gray-700">
                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200">{{ __("Prêts") }}</h2>
                    <p class="text-gray-600 dark:text-gray-400 mb-2">
                        {{ __("Voici les prêts qui prendront bientôt fins.") }}
                    </p>
                    <div class="mb-3">
                        @if(isset($randomDevices) && $randomDevices->isNotEmpty())
                            @foreach ($randomDevices as $device)
                                <div class="p-4 sm:p-8 bg-gray-100 dark:bg-gray-700 shadow sm:rounded-lg border border-gray-200 dark:border-gray-600">
                                    <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-200 mb-2">
                                        {{ $device->name }} {{ $device->model ? ' - ' . $device->model : '' }}
                                    </h3>
                                    <ul class="mb-2 text-gray-700 dark:text-gray-300 text-sm space-y-1">
                                        <li>
                                            <span class="font-semibold">Numéro de série :</span>
                                            <span class="ml-1">{{ $device->serial_number }}</span>
                                        </li>
                                        <li>
                                            <span class="font-semibold">Utilisateur :</span>
                                            <span class="ml-1">{{ $device->user->name ?? 'Aucun prêt' }}</span>
                                        </li>
                                        <li>
                                            <span class="font-semibold">Marque :</span>
                                            <span class="ml-1">{{ $device->brand->name }}</span>
                                        </li>
                                        <li>
                                            <span class="font-semibold">Catégorie :</span>
                                            <span class="ml-1">{{ ucfirst($device->category) }}</span>
                                        </li>
                                        <li>
                                            <span class="font-semibold">Système d'exploitation :</span>
                                            <span class="ml-1">{{ $device->operating_system->brand}} {{ $device->operating_system->version }} {{ $device->operating_system->build }}</span>
                                        </li>
                                    </ul>
                                    <a href="{{ route('repairs.show', $device->id) }}" class="block text-right text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
                                        {{ __("Plus de détails") }}
                                    </a>
                                </div>
                            @endforeach
                        @else
                            <div class="mt-4 p-4 sm:p-8 bg-gray-100 dark:bg-gray-700 shadow sm:rounded-lg border border-gray-200 dark:border-gray-600">
                                <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-200 mb-2">
                                    Aucun prêt pour le moment.
                                </h3>
                            </div>
                        @endif
                    </div>
                    <a href="{{ route("loans") }}" class="block text-right text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
                        Tous les prêts
                    </a>
                </div>
            </div>
        </div>
    @else
        <div class="py-12 bg-gray-50 dark:bg-gray-900 min-h-screen">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg border border-gray-200 dark:border-gray-700">
                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200">{{ __("Mes prêts") }}</h2>
                    <div class="mb-3">
                        @if(isset($randomDevices) && $randomDevices->isNotEmpty())
                            @foreach ($randomDevices as $device)
                                <div class="p-4 sm:p-8 bg-gray-100 dark:bg-gray-700 shadow sm:rounded-lg border border-gray-200 dark:border-gray-600">
                                    <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-200 mb-2">
                                        {{ $device->name }} {{ $device->model ? ' - ' . $device->model : '' }}
                                    </h3>
                                    <ul class="mb-2 text-gray-700 dark:text-gray-300 text-sm space-y-1">
                                        <li>
                                            <span class="font-semibold">Numéro de série :</span>
                                            <span class="ml-1">{{ $device->serial_number }}</span>
                                        </li>
                                        <li>
                                            <span class="font-semibold">Utilisateur :</span>
                                            <span class="ml-1">{{ $device->user->name ?? 'Aucun prêt' }}</span>
                                        </li>
                                        <li>
                                            <span class="font-semibold">Marque :</span>
                                            <span class="ml-1">{{ $device->brand->name }}</span>
                                        </li>
                                        <li>
                                            <span class="font-semibold">Catégorie :</span>
                                            <span class="ml-1">{{ ucfirst($device->category) }}</span>
                                        </li>
                                        <li>
                                            <span class="font-semibold">Système d'exploitation :</span>
                                            <span class="ml-1">{{ $device->operating_system->brand}} {{ $device->operating_system->version }} {{ $device->operating_system->build }}</span>
                                        </li>
                                    </ul>
                                    <a href="{{ route('devices.show', $device->id) }}" class="block text-right text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
                                        {{ __("Plus de détails") }}
                                    </a>
                                </div>
                            @endforeach
                        @else
                            <div class="mt-4 p-4 sm:p-8 bg-gray-100 dark:bg-gray-700 shadow sm:rounded-lg border border-gray-200 dark:border-gray-600">
                                <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-200 mb-2">
                                    Aucun prêt pour le moment.
                                </h3>
                            </div>
                        @endif
                    </div>
                    <a href="{{ route("loans") }}" class="block text-right text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
                        Tous les prêts
                    </a>
                </div>
            </div>
        </div>
    @endif
</x-app-layout>
