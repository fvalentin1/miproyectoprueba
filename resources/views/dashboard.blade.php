<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Has iniciado sesión correctamente") }}

                    @role('Admin')
                        <h1>Eres usuario Administrador</h1>
                    @endrole

                    @role('Profesor')
                        <h1>Eres usuario Profesor</h1>
                    @endrole

                    @role('Alumno')
                        <h1>Eres usuario Alumno</h1>
                    @endrole
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
