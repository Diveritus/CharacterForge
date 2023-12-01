<x-adminlte::page>
    <x-slot name="title">
        Dashboard
    </x-slot>

    <x-slot name="content_header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <x-slot name="content">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <x-welcome />
                </div>
            </div>
        </div>
    </x-slot>
</x-adminlte::page>