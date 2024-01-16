<x-app-layout>
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <form method="POST" action="{{ route('escuelas') }}">
                @csrf
                    <div class="mb-5">
                    <label class="block text-gray-300 font-bold  mb-1 md:mb-0 pr-4"
                            for="escuela">
                            Nombre de la Escuela
                        </label>
                            <input class="border border-gray-700 p-2 w-1/2 dark:text-stone-950"
                                type="text"
                                name="escuela"
                                id="escuela"
                                required>
                    </div>
                    <div class="mb-5">
                    <label class="block text-gray-300 font-bold  mb-1 md:mb-0 pr-4"
                            for="cct">
                            CCT de la escuela
                        </label>
                            <input class="border border-gray-400 p-2 w-1/2 dark:text-stone-950"
                                type="text"
                                name="cct"
                                id="cct"
                                required>
                    </div>
                    <x-primary-button>
                        Enviar
                    </x-primary-button>
                </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>