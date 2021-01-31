<x-app-layout>

    <x-slot name="title"></x-slot>


    <x-slot name="header">
        <x-layout.header>
            <div class="flex-1 min-w-0">
                <div class="flex items-center">
                    <h1 class="text-2xl font-bold leading-7 text-cool-gray-900 sm:leading-9 sm:truncate">
                        Categories
                    </h1>
                </div>
            </div>
            <div class="mt-6 flex space-x-3 md:mt-0 md:ml-4">
                <span class="shadow-sm rounded-md">
                    <a href="{{ route('categories.create') }}" class="lw-form-btn-save">
                        Add category
                    </a>
                </span>
            </div>
        </x-layout.header>
    </x-slot>

    <x-categories.category-list :categories="$categories" />



    {{-- 
    <div class="flex flex-wrap">
        <div class="w-full md:w-2/4">
            @include('shared.search',['action' => 'categories.index'])
        </div>
        <div class="w-full md:w-1/4"></div>
        <div class="w-full md:w-1/4">
            <div class="text-right pt-2 mb-2">
                <a href="{{route('categories.create')}}"
    class="bg-black px-2 py-1 text-white hover:bg-pink-800 hover:text-white rounded">
    @include('icons.add') <span class="ml-2">Add Category</span>
    </a>
    </div>
    </div>
    </div>


    <div id="categories-list" class="mb-5 rounded border">
        <div class="flex flex-wrap w-full bg-gray-100 px-3 py-2 border-b">
            <div class="md:w-1/5">
                <span class="block text-sm uppercase text-gray-700 font-semibold">Name</span>
            </div>
        </div>
        <ul class="data-list">
            @forelse ($categories as $cat)
            <li>
                <a href="{{ route('categories.show', $cat->id )}}" class="flex justify-between">
                    <div class="inline-flex">
                        <span class="text-sm">
                            @if ($cat->icon)
                            @php
                            $icon = 'icons.' . $cat->icon;
                            @endphp
                            @include($icon, ['style' => 'h-5 w-5 mr-2'])
                            @endif
                        </span>
                        <strong>{{$cat->name}}</strong>
                    </div>
                    @include('icons.next', ['style'=>'h-5 w-5 float-right self-center text-gray-700'])
                </a>
            </li>
            @empty

            <li>No categories found!</li>

            @endforelse
        </ul>
    </div>
    {{ $categories->appends([ 'search' => request()->query('search') ])->links() }} --}}

</x-app-layout>