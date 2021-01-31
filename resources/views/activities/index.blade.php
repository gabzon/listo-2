<x-app-layout>
    <x-slot name="title"></x-slot>
    <x-slot name="header">
        <x-layout.header>
            <div class="flex-1 min-w-0">
                <div class="flex items-center">
                    <h1 class="text-2xl font-bold leading-7 text-cool-gray-900 sm:leading-9 sm:truncate">
                        Activities
                    </h1>
                </div>
            </div>
            <div class="mt-6 flex space-x-3 md:mt-0 md:ml-4">
                <span class="shadow-sm rounded-md">
                    <a href="{{ route('activities.create') }}" class="lw-form-btn-save">
                        Add activity
                    </a>
                </span>
            </div>
        </x-layout.header>
    </x-slot>
    <livewire:activities.activity-list />
</x-app-layout>