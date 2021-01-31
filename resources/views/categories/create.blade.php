<x-app-layout>
    <x-slot name="title">Add Category</x-slot>
    <x-categories.category-form action="add" />
</x-app-layout>



{{-- 


<form class="kirby-form"
    action="{{ isset($category) ?  route('categories.update', $category->id) : route('categories.store') }}"
method="POST">
@csrf
@method($method)

<div class="mb-6">
    <label for="name">Name</label>
    <input id="name" type="text" name="name" placeholder="ex: Business" value="{{ $name }}"
        class="@error('name') field-error @enderror">
    @error('name')
    <p class=" italic text-red-600 text-sm">{{ $message }}</p>
    @enderror
</div>

<div class="mb-6">
    <label for="description">Description</label>
    <textarea name="description" id="description" cols="30" rows="5">{{ $description }}</textarea>
</div>

<div class="mb-6">
    <label for="icon">Icon</label>
    <input id="icon" type="text" name="icon" placeholder="ex: cross" value="{{ $icon }}">
</div>

<button type="submit">
    @include($btn_icon) {{ $button }}
</button>
</form> --}}