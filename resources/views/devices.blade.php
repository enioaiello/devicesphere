<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Appareils') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 dark:bg-gray-900 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            @if($user->role === 'admin')
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg border border-gray-200 dark:border-gray-700">
                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 mb-2">
                        Gestion des appareils
                    </h2>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        Pour gérer les appareils présents sur votre compte, accédez à votre panneau d'administration.
                    </p>
                    <a href="{{ route('devices.manage') }}" class="block text-right text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
                        {{ __("Commencer") }}
                    </a>
                </div>
            @endif

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg border border-gray-200 dark:border-gray-700">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 mb-2">
                    {{ __("Liste des appareils") }}
                </h2>
                @if ($user->role === 'admin')
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        {{ __("Voici les appareils enregistrés sur votre compte.") }}
                    </p>
                @else
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        {{ __("Voici les appareils qui vous ont été prêtés.") }}
                    </p>
                @endif

                @if(isset($devices) && $devices->isNotEmpty())
                    <div class="space-y-6">
                        @foreach ($devices as $device)
                            <div class="p-4 sm:p-8 bg-gray-100 dark:bg-gray-900 shadow sm:rounded-lg border border-gray-200 dark:border-gray-700">
                                <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-200 mb-2">
                                    {{ $device->name }} {{ $device->model ? ' - ' . $device->model : '' }}
                                </h3>

                                <ul class="mb-3 text-gray-700 dark:text-gray-300 text-sm space-y-1">
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
                                        <span class="ml-1">
                                            {{ $device->operating_system->brand }}
                                            {{ $device->operating_system->version }}
                                            {{ $device->operating_system->build }}
                                        </span>
                                    </li>
                                </ul>

                                <a href="{{ route('devices.show', $device->id) }}"
                                   class="block text-right text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
                                    {{ __("Plus de détails") }}
                                </a>
                            </div>
                        @endforeach
                    </div>

                @else
                    <div class="mt-4 p-4 sm:p-8 bg-gray-100 dark:bg-gray-900 shadow sm:rounded-lg border border-gray-200 dark:border-gray-700">
                        <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-200 mb-2">
                            Aucun appareil pour le moment.
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400">
                            {{ __("Les appareils que vous ajouterez à votre compte s'afficheront ici.") }}
                        </p>
                    </div>
                @endif
            </div>

        </div>
    </div>
</x-app-layout>
