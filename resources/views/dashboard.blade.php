@push('seo')
<script src="/example.js"></script>
@endpush
<x-app-layout>

    <x-slot name="title">{{ __('Dashboard') }}</x-slot>
    <x-slot name="head">
        <x-layout.open-graph title="hola" description="esta description esta bien buena" image="alskdjflskdfj" />
    </x-slot>

    {{-- <x-slot name="header">
        <x-layout.header>
            <h1 class="font-semibold text-xl text-gray-800 leading-tight">
                
    </h1>
    </x-layout.header>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>