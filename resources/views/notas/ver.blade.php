<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ver notas
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400>
                                    <tr class="-8">

                                        <th scope="col" class="px-6 py-3">Alumno</th>
                                        <th scope="col" class="px-6 py-3">Evaluacion</th>
                                        <th scope="col" class="px-6 py-3">Asignatura</th>
                                        <th scope="col" class="px-6 py-3">Nota</th>
                                        <th scope="col" class="px-6 py-3">Nota</th>

                                    </thead>
                                </tr>
                                @foreach ($notas as $nota)
                                    <tr
                                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">

                                        <td class="px-6 py-4">

                                            {{ $nota->alumno->nombre }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $nota->evaluacion->evaluacion }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $nota->asignatura->denominacion }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $nota->nota }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="{{ route('notas.cambiar',$nota->id) }}"
                                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                                Cambiar nota
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <br>

                        </dd>
                </div>
                <div class="mt-6 text-center">

                </div>
                </dl>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
