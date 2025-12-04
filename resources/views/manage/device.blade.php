<x-app-layout>
    <x-slot name="header" class="flex flex-row items-center justify-between">
        <div class="flex flex-row items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight inline-block">
                {{ __('Gestion des appareils') }}
            </h2>
            <a href="{{ route('admin') }}"
               class="inline-block text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
                {{ __("Retour") }}
            </a>
        </div>

    </x-slot>

    <div class="py-12 bg-gray-50 dark:bg-gray-900 min-h-screen">
        <div class="mb-3 max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg border border-gray-200 dark:border-gray-700">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 mb-2">
                    {{ __("Options") }}
                </h2>
                <p class="text-gray-700 dark:text-gray-300 mt-1">
                    {{ __("Si vous désirez effectuer des opérations spécifique, vous pouvez essayer une des commandes ci-dessous.") }}
                </p>
                <div class="w-100 flex flex-row items-center justify-end">
                    <a href="{{ route('devices.add') }}"
                       class="inline-block text-right text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
                        {{ __("Ajouter un appareil") }}
                    </a>
                    <a href="{{ route('devices.add') }}"
                       class="inline-block text-right text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 ml-2">
                        {{ __("Supprimer tous les appareils") }}
                    </a>
                </div>
            </div>
        </div>
        <div class="mb-3 max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg border border-gray-200 dark:border-gray-700">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 mb-2">
                    {{ __("Liste des appareils") }}
                </h2>


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
