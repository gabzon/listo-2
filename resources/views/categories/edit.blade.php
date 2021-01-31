<x-app-layout>
    <x-slot name="title">Edit Category</x-slot>
    <x-categories.category-form action="edit" :category="$category" />
</x-app-layout>