<x-app-layout>
    <x-slot name="title">Edit Country</x-slot>
    <x-countries.country-form action="edit" :country="$country" />
</x-app-layout>