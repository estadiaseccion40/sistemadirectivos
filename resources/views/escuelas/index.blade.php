<x-app-layout>
    @if (session('status'))
    <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <span class="sr-only">Info</span>
        <div>
          <span class="font-medium">        {{session('status')}}        </span>
        </div>
      </div>
    @endif
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
                            <th class="px-4 py-2">Nombre de la Escuela</th>
                            <th class="px-4 py-2">CCT de la escuela</th>
                            <th class="px-4 py-2">Direccion de la escuela</th>
                            <th class="px-4 py-2">Turno</th>
                            <th class="px-4 py-2">Cotejador de la escuela</th>

                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($escuelas as $escuela)
                                <tr>
                                    <td class="px-4 py-2">{{ $escuela->nombre }}</td>
                                    <td class="px-4 py-2">{{ $escuela->cct }}</td>
                                    <td class="px-4 py-2">{{ $escuela->direccion }}</td>
                                    <td class="px-4 py-2">{{ $escuela->turno }}</td>
                                    <td class="px-4 py-2">{{ $escuela->user_id }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
