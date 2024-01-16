<x-app-layout>
<x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Escuelas') }}
            </h2>
            <a href="{{ route('escuelas.create') }}" class="{{ Request::routeIs('escuelas.create') ? 'active' : '' }} bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Crear Escuela
            </a>

        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <table class="table-auto">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">Nombre</th>
                            <th class="px-4 py-2">Email</th>
                            <th class="px-4 py-2">Fecha de Creacion</th>
                        </tr>
                        </thead>
                        <tbody>
                            <!-- Aquí puedes agregar las filas de tu tabla -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>