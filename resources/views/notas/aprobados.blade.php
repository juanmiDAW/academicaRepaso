<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Alumnos
        </h2>
    </x-slot>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex gap-x-20">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                                Aprobados </h2>
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="mt-6 text-center">
                                                Nombre </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="mt-6 text-center">
                                                Calificacion </div>
                                        </th>
                                </thead>
                                <tbody>

                                    @foreach ($aprobados as $aprobado)
                                        @foreach ($aprobado->notas as $nota)
                                            @if ($nota->nota >= 5)
                                                <tr>

                                                    <td scope="col" class="px-6 py-3">
                                                        <div class="mt-6 text-center">
                                                            {{ $nota->alumno->nombre }}
                                                        </div>
                                                    </td>
                                                    <td scope="col" class="px-6 py-3">
                                                        <div class="mt-6 text-center">
                                                            {{ $nota->nota }}
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
