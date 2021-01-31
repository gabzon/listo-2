<x-app-layout>
    <x-slot name="title"></x-slot>

    <x-slot name="title"></x-slot>

    <x-slot name="header">
        <x-layout.header>
            <div class="flex-1 min-w-0">
                <div class="flex items-center">
                    <h1 class="text-2xl font-bold leading-7 text-cool-gray-900 sm:leading-9 sm:truncate">
                        Companies
                    </h1>
                </div>
            </div>
            <div class="mt-6 flex space-x-3 md:mt-0 md:ml-4">
                <span class="shadow-sm rounded-md">
                    <a href="{{ route('companies.create') }}" class="lw-form-btn-save">
                        Add country
                    </a>
                </span>
            </div>
        </x-layout.header>
    </x-slot>

    <livewire:companies.company-list />



    {{-- @include('shared.search',['action' => 'companies.index']) --}}


    @if ($trashed_button)
    @auth
    <div class="text-center my-10">
        <a href="{{ route('trashed_company.trashed') }}" class="kirby-btn my-2">
            @include('icons.trash')
            View trashed
        </a>
    </div>
    @endauth
    @endif


</x-app-layout>