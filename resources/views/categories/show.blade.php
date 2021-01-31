<x-app-layout>
    <x-slot name="title"></x-slot>
    <header class="py-16 text-center">
        <h2 class="text-2xl font-bold leading-7 sm:text-3xl sm:leading-9 sm:truncate">
            {{ $category->name }}
        </h2>
        @if($category->icon)
        @php
        $icon = 'icons.' . $category->icon;
        @endphp
        <div class="text-center my-10">
            @include($icon, ['style' => 'h-10 w-10 block mx-auto'])
        </div>
        @endif
    </header>
    <div class="mb-10 w-1/2 mx-auto text-center">
        {{ $category->description }}
    </div>

    <div class="my-20 flex justify-center">
        <a href="{{ route('categories.edit', $category->id) }}" class="lw-form-btn-save">
            @include('icons.edit')
            Edit
        </a>
        @include('shared.delete', ['model'=> $category, 'action'=>'categories.destroy'])
        {{-- <form action="{{ route('categories.destroy', $category->id )}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="ml-2 lw-btn-danger">
            @include('icons.trash')
            <span class="ml-2">Delete</span>
        </button>
        </form> --}}
    </div>
</x-app-layout>